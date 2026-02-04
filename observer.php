<?php
// Subject interface
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

// Observer interface
interface Observer {
    public function update($message);
}

// Concrete Subject class
class NewsAgency implements Subject {
    private $observers = [];
    private $news;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter(
            $this->observers,
            fn($o) => $o !== $observer
        );
    }
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->news);
        }
    }

    public function addNews($news) {
        $this->news = $news;
        $this->notify();
    }
}

// Concrete Observer classes
class EmailSubscriber implements Observer {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function update($message) {
        echo "Email sent to {$this->name}: New news - {$message}
";
    }
}

class SmsSubscriber implements Observer {
    private $number;
    public function __construct($number) {
        $this->number = $number;
    }

    public function update($message) {
        echo "SMS sent to {$this->number}: New news - {$message}
";
    }
    // Usage example
$agency = new NewsAgency();

$emailUser = new EmailSubscriber("Alice");
$smsUser = new SmsSubscriber("123-456-7890");

$agency->attach($emailUser);
$agency->attach($smsUser);

$agency->addNews("Observer pattern implemented in PHP!");
$agency->addNews("Breaking news: PHP is awesome!");