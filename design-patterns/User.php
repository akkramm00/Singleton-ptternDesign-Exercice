class User
{
public string $username;
public Logger $logger;

public function __construct(string $username)
{
$this-> username = $username;
$this->logger = new Logger();
$this->logger->('Utilisateur '.$this->username. ' créé')
}
public function sayHello():string
}