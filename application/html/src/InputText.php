<?php 

namespace Form;

use Form\Form;

class InputText extends Form
{
    public function __construct()
    {
        parent::__construct();

        return $this;
    }

    public function render()
    {
        echo $this->twig->render('tailwind/input-text.html', [
            'required' => $this->getRequired(),
            'placeholder' => $this->getPlaceholder(),
            'type' => $this->getType(),
            'label' => $this->getLabel(),
            'name' => $this->getName(),
            'id' => $this->getId(),
            'value' => $this->getValue(),
            'class' => $this->getClass(),
            'labelClass' => $this->getLabelClass(),
        ]);
    }
}