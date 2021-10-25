<?php
class PreparedStatement
{
    public $query = "";
    public $parameters = [];
    public $types = "";

    function __construct(PreparedStatement $pstmt = null)
    {
        if ($pstmt != null) {
            $this->setStatement($pstmt);
        }
    }

    function setSafeQuery($query)
    {
        $this->query .= $query;
        return $this;
    }
    function setQuery($query, $types, $data)
    {
        $this->query .=" ". trim($query) . " ";
        $this->types .= $types;
        if (is_array($data)) {
            array_push($this->parameters, ...$data);
        } else {
            array_push($this->parameters, $data);
        }
        return $this;
    }
    function setStatement(PreparedStatement $p)
    {
        $this->setQuery($p->query, $p->types, $p->parameters);
        return $this;
    }
    function setArrayOption($option, $type, $param, $stringForm = false, $separator = ",")
    {
        $this->query .= $option;
        $this->query .= " (";
        $arrayOfParams = [];
        if ($stringForm) {
            $param = explode($separator, $param);
        }
        $arrayOfParams = $param;
        
        foreach ($arrayOfParams as $value) {
            $this->setQuery("?,", $type, $value);
        }
        
        $this->query = rtrim($this->query,', ');
        $this->query .= ") ";
       
        return $this;
    }
    
}
