<?php

namespace WellmedPlus\MsPlusEmr;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsPlusEmrServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsPlusEmr::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
