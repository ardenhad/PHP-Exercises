<?php
/*
Creates an array with size of x*y filled with random 0s and 1s.
0 = water, 1 = island.
Adjacent(vertically and horizontally, not diagonal) 1s count as 1 island.
*/
class Map {
	public $x = 10;
	public $y = 10;
	public $map = [[]];
	public $discoveredLands = [[]];
	public $islandCount = 0;
	
	function __construct($customX = 10, $customY = 10) {
		$this->x = $customX;
		$this->y = $customY;
		$this->generateRandomMap($this->x, $this->y);
		$this->resetDiscoveredLands();
	}
	
	function generateRandomMap() {
		for ($i = 0; $i < $this->x; $i++) {
			for ($j = 0; $j < $this->y; $j++) {
				$this->map[$i][$j] = rand(0, 1);
			}
		}
	}
	
	function resetDiscoveredLands() {
		for ($i = 0; $i < $this->x; $i++) {
			for ($j = 0; $j < $this->y; $j++) {
				$this->discoveredLands[$i][$j] = 0;
			}
		}
	}
	
	function printMap() {
		for ($i = 0; $i < $this->x; $i++) {
			for ($j = 0; $j < $this->y; $j++) {
				echo $this->map[$i][$j];
			}
			echo "<br>";
		}
	}
	
	function countIslands() {
		for ($i = 0; $i < $this->x; $i++) {
			for ($j = 0; $j < $this->y; $j++) {
				if ($this->map[$i][$j] === 1) {
					$map2 = $this->map;
					dfs($map2, array($i, $j));
					$this->islandCount++;
				}
			}
		}
	}
	
	/*
	function countIslands() {
		for ($i = 0; $i < $this->x; $i++) {
			for ($j = 0; $j < $this->y; $j++) {
				if (!($this->map[$i][$j] === 1 && $this->discoveredLands[$i][$j] === 0)) {
					$this->blacklistAdjacentLands($i, $j);
					$this->islandCount++;
				} 
			}
		}
	}
	
	function blacklistAdjacentLands($nx, $ny) {
		$this->discoveredLands[$nx][$ny] = 1;
		if ($nx > 0 && $this->map[$nx - 1][$ny] === 1) {
			$this->blacklistAdjacentLands($nx - 1, $ny);
		}
		if ($nx < ($this->x - 1) && $this->map[$nx + 1][$ny] === 1) {
			$this->blacklistAdjacentLands($nx + 1, $ny);
		}
		if ($ny > 0 && $this->map[$nx][$ny - 1] === 1) {
			$this->blacklistAdjacentLands($nx, $ny - 1);
		}
		if ($ny < ($this->y - 1) && $this->map[$nx][$ny + 1] === 1) {
			$this->blacklistAdjacentLands($nx, $ny + 1);
		}
	}
	*/
}

//Taken from https://www.w3resource.com/php-exercises/php-basic-exercise-71.php
function dfs(&$field, $s) {
    $stack = array($s);
    $dx = array(1, -1, 0, 0);
    $dy = array(0, 0, 1, -1);
    while (count($stack)) {
        $node = array_pop($stack);
        $field[$node[0]][$node[1]] = '0';
        for ($i = 0; $i < 4; $i++) {
            $nx = $node[1] + $dx[$i];
            $ny = $node[0] + $dy[$i];
            if (!isset($field[$ny][$nx]) || $field[$ny][$nx] === '0') {
                continue;
            }
            $stack[] = array($ny, $nx);
        }
    }
}

$myMap = new Map(10, 10);
$myMap->printMap();
$myMap->countIslands();
echo $myMap->islandCount;


?>