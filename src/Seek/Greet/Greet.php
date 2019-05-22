<?php

namespace Seeker\Greet;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Greet extends PluginBase{
    
public function onEnable(): void{ 
    
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info("enabled");
}
public function onCommand(CommandSender $sender, Command $command, $label, array $args): bool{ 
switch(strowlower($command->getName())){
case test:
$sender->sendMessage("Hi!");
 return true; 
}
return false;
}
}
