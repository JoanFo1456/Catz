<?php

namespace JoanFo\Catz;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Illuminate\Translation\Translator;

class CatzPlugin implements Plugin
{
    private static bool $registered = false;

    public function getId(): string
    {
        return 'catz';
    }

    public function register(Panel $panel): void
    {
        if (self::$registered) {
            return;
        }

        self::$registered = true;

        $translator = app('translator');

        $originalLoader = $translator->getLoader();

        $wrappedLoader = new class($originalLoader)
        {
            private $loader;

            public function __construct($loader)
            {
                $this->loader = $loader;
            }

            public function load($locale, $group, $namespace = null)
            {
                $translations = $this->loader->load($locale, $group, $namespace);

                if ($locale === 'catz') {
                    $enTranslations = $this->loader->load('en', $group, $namespace);

                    if (!empty($enTranslations)) {
                        $catified = CatzTranslator::catifyArray($enTranslations);
                        $translations = array_replace_recursive($catified, $translations);
                    }
                }

                return $translations;
            }

            public function addNamespace($namespace, $hint)
            {
                return $this->loader->addNamespace($namespace, $hint);
            }

            public function addJsonPath($path)
            {
                return $this->loader->addJsonPath($path);
            }

            public function namespaces()
            {
                return $this->loader->namespaces();
            }

            public function __call($method, $parameters)
            {
                return $this->loader->$method(...$parameters);
            }
        };

        $reflection = new \ReflectionClass($translator);
        $property = $reflection->getProperty('loader');
        $property->setAccessible(true);
        $property->setValue($translator, $wrappedLoader);
    }

    public function boot(Panel $panel): void {}
}
