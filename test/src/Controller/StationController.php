<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Station Controller
 *
 * @property \App\Model\Table\StationTable $Station
 */
class StationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $station = $this->paginate($this->Station);

        $this->set(compact('station'));
        $this->set('_serialize', ['station']);
    }

    /**
     * View method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $station = $this->Station->get($id, [
            'contain' => []
        ]);

        $this->set('station', $station);
        $this->set('_serialize', ['station']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $station = $this->Station->newEntity();
        if ($this->request->is('post')) {
            $station = $this->Station->patchEntity($station, $this->request->data);
            if ($this->Station->save($station)) {
                $this->Flash->success(__('The station has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The station could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('station'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $station = $this->Station->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $station = $this->Station->patchEntity($station, $this->request->data);
            if ($this->Station->save($station)) {
                $this->Flash->success(__('The station has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The station could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('station'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Station id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $station = $this->Station->get($id);
        if ($this->Station->delete($station)) {
            $this->Flash->success(__('The station has been deleted.'));
        } else {
            $this->Flash->error(__('The station could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
