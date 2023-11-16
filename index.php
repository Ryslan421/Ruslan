<?php
class Comp {
    // Властивості класу
    public $processorName;
    public $processorFrequency;
    public $ramSize;
    public $hddSize;

    // Конструктор класу з параметрами
    public function __construct($processorName, $ramSize, $hddSize, $processorFrequency = 4.1) {
        $this->processorName = $processorName;
        $this->ramSize = $ramSize;
        $this->hddSize = $hddSize;
        $this->processorFrequency = $processorFrequency;
    }

    // Метод для виведення даних про комп'ютер
    public function out() {
        echo "Модель: {$this->processorName}\n";
        echo "Частота: {$this->processorFrequency} GHz\n";
        echo "ОЗУ: {$this->ramSize} GB\n";
        echo "HDD: {$this->hddSize} GB\n";
    }
}

// Створення об'єктів-комп'ютерів
$comp1 = new Comp("Intel", 8, 500); // З частотою процесора за замовчуванням (4.1 ГГц)
$comp2 = new Comp("AMD", 16, 1000, 3.5); // З власною частотою процесора (3.5 ГГц)

// Виклик методу out() для об'єктів
echo "Дані про comp1:\n";
$comp1->out();
echo "\nДані про comp2:\n";
$comp2->out();
?>
