<?php
namespace li3_git\extensions\data\source;

class Git extends \lithium\data\Source {

    public function connect() {
        if(!$this->isConnected()) {
            return $this->repo = new \Git2\Repository($this->_config['path']);
        }
        return false;
    }

    public function disconnect() {
        if($this->isConnected()) {
            unset($this->repo);
            return true;
        }
        return false;
    }

    public function isConnected(array $options = array()) {
        return isset($this->repo);
    }

    public function sources($class = null) {}
    public function describe($entity, array $meta = array()) {}
    public function relationship($class, $type, $name, array $options = array()) {}

    public function create($query, array $options = array()) {}
    public function read($query, array $options = array()) {}
    public function update($query, array $options = array()) {}
    public function delete($query, array $options = array()) {}
}
?>
