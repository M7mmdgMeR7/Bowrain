<?php
namespace bowrain;
use pocketmine\plugin\PluginBase;
class main extends PluginBase{
public function onEnable(){
 $this->getServer()->getLogger()->info("plugin enabled");
 $this->getLogger()->info("test good");
  }
public function onDisable(){
 $this->getServer()->getLogger()->info("plugin off");
 }
}


