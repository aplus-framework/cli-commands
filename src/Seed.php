<?php namespace Framework\CLI\Commands;

use App\Seeds\Seeder;
use Framework\CLI\Command;

class Seed extends Command
{
	protected string $name = 'seed';
	protected string $description = 'Seed database.';
	protected string $usage = 'seed';

	public function run() : void
	{
		(new Seeder(\App::database()))->run();
	}
}
