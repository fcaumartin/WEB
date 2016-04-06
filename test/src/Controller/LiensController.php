<?php

namespace App\Controller;

class LiensController extends AppController
{

    public function index()
    {
    	$this->Liens->find('all');
         $this->set("tableau", $this->Liens->find('all'));
    }

    public function detail($id)
    {
    	$ligne = $this->Liens->get($id);
        $this->set("ligne", $ligne);
    }

    public function ajouter()
    {
    	if ($this->request->is('post')) {

    		$ligne = $this->Liens->newEntity();
    		$ligne = $this->Liens->patchEntity($ligne, $this->request->data);
    		if ($this->Liens->save($ligne)) {
    			$this->Flash->success(__('Votre requête a été sauvegardée.'));
    		}
    		$this->redirect("/liens/index");

    	}
    }
}

