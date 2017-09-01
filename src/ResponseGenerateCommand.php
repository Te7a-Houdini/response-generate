<?php

namespace Te7aHoudini\ResponseGenerate;

use Illuminate\Console\GeneratorCommand;

class ResponseGenerateCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'generate:response {className}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new response class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Response';


    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/response.stub';
    }
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Responses';
    }

}