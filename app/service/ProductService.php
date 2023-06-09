<?php

namespace Services;

use Repositories\ProductRepository;
use Models\Product;

class ProductService {

    private $repo;
    function __construct() {
        $this->repo = new ProductRepository();
    }

    public function getAll($offset = NULL, $limit = NULL): mixed {
        return $this->repo->getAll($offset, $limit);
    }

    public function getById(int $id): mixed {
        return $this->repo->getById($id);
    }

    public function create(Product $product): mixed {       
        return $this->repo->create($product);        
    }

    public function update(Product $product, int $id): mixed {       
        return $this->repo->update($product, $id);        
    }

    public function delete(int $id):mixed {       
        return $this->repo->delete($id);        
    }
}