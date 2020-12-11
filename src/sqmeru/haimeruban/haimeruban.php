<?php
declare(strict_types=1);

namespace sqmeru\haimeruban;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class haimeruban extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getLogger()->info("§d[haimeruban] §fsqmeruを殺します。 / Kill sqmeru");
        $this->getLogger()->info("haimeruban v1.0.0 を実行中")
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onRespawn(PlayerRespawnEvent $event) {
        $rban = rand(0, 1);
        if ($rban == 0) {
            $player = $event->getPlayer();
            $name = $player->getName();
            if ($name == "sqmeru") {
                $player->setBanned();
            }
        }
    }

    public function onJoin(PlayerJoinEvent $event) {
        $rban = rand(0, 1);
        if ($r == 0) {
            $player = $event->getPlayer();
            $name = $player->getName();
            if ($name == "sqmeru") {
                $player->setBanned();
            }
        }
    }
}