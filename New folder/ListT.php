<?php class ListT
{
    private string $type;
    private string $baseName;
    private array $data;
    private int $count = 0;
    public function __construct($type)
    {
        if (gettype($type) == "object")
        {
            $this->type = get_class($type);
            $this->baseName = gettype($type);
        }
        else
        {
            $this->type = gettype($type);
            $this->baseName = '';
        }
    }
    public function Add($value)
    {
        if ($this->baseName == "object" && gettype($value) == "object")
        {
            if (get_class($value) == $this->type)
            {
                $this->data[$this->count] = $value;
                $this->count++;
            }
            else
            {
                throw new ErrorException("invalid type, list only accepts a ".strtoupper($this->type)."\"");
            }
        }
        else
        {
            if (gettype($value) == $this->type)
            {
                $this->data[$this->count] = $value;
                $this->count++;
            }
            else
            {
                throw new ErrorException("invalid type, list only accepts a ".strtoupper($this->type)."\"");
            }
        }
    }
    public function Get(int $number)
    {
        if (empty($this->data))
        {
            throw new ErrorException("empty list");
        }
        if ($number >= $this->count)
        {
            throw new ErrorException("out of range");
        }
        if ($number < 0)
        {
            throw new ErrorException("empty or incorrect value");
        }
        
        return $this->data[$number];
    }
    public function Remove(int $number)
    {
        if (empty($this->data))
        {
            throw new ErrorException("empty list");
        }
        if ($number >= $this->count)
        {
            throw new ErrorException("out of range");
        }
        if ($number < 0)
        {
            throw new ErrorException("empty or incorrect value");
        }

        unset($this->data[$number]);
        $newData = $this->data;
        $this->data = [];
        $this->count--;
        foreach ($newData as $data)
        {
            $this->data[] = $data;
        }
    }
    public function Clear()
    {
        $this->data = [];
        $this->count = 0;
    }
    public function Length()
    {
        if (empty($this->data))
        {
            throw new ErrorException("empty list");
        }
        
        return count($this->data);
    }
    public function GetAsArray()
    {
        if (empty($this->data))
        {
            throw new ErrorException("empty list");
        }
        if ($number >= $this->count)
        {
            throw new ErrorException("out of range");
        }
        if ($number < 0)
        {
            throw new ErrorException("empty or incorrect value");
        }
        
        return $this->data;
    }
    public function GetType()
    {
        return $this->type;
    }
}