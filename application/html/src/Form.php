<?php 

namespace Form;

class Form 
{
    protected $twig;
    protected $required;
    protected $placeholder;
    protected $type;
    protected $label;
    protected $name;
    protected $id;
    protected $value;
    protected $class;
    protected $labelClass;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/templates');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => __DIR__ .  '/cache',
        ]);

        $this->required = false;
        $this->placeholder = '';
        $this->type = 'text';
        $this->label = '';
        $this->name = '';
        $this->id = '';
        $this->value = '';
        $this->class = '';
        $this->labelClass = '';
    }

    /**
     * @return false
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param false $required
     * @return Form
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     * @return Form
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Form
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Form
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Form
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Form
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Form
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return Form
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelClass()
    {
        return $this->labelClass;
    }

    /**
     * @param string $labelClass
     * @return Form
     */
    public function setLabelClass($labelClass)
    {
        $this->labelClass = $labelClass;
        return $this;
    }
}