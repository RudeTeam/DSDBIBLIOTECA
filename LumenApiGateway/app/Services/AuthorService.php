<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
   use ConsumesExternalService;
   /**
     *dad
     *@var string
     */
   public $baseUri;

   public function __construct()
   {
   	$this->baseUri = config('services.authors.base_uri');
   }
   /**
    * Este metodo obtiene la lista completa de autores desde el servicio de autores
    * @return string
    */
    public function obtainAuthors()
    {
     return $this->performRequest('GET','/authors');
    }

    public function createAuthor($data)
    {
     return $this->performRequest('POST','/authors', $data);
    }

    public function obtainAuthor($author)
    {
     return $this->performRequest('GET',"/authors/{$author}");
    }
   
    public function editAuthor($data,$author)
    {
     return $this->performRequest('PUT',"/authors/{$author}",$data);
    }

    public function deleteAuthor($author)
    {
     return $this->performRequest('DELETE',"/authors/{$author}");
    }
}