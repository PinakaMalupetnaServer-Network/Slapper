<?php

declare(strict_types=1);

namespace slapper;

use pocketmine\scheduler\Task;
use slapper\Main;

class RefreshCount extends Task {
	private $plugin;
	public function __construct(Main $plugin)
	{
		$this->plugin = $plugin;
	}

	public function onRun(int $currentTick)
	{
		$this->plugin->playerCount();
		$this->plugin->combinedPlayerCounts();
	}
}