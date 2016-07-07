<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Connections Controller
 *
 * @property \App\Model\Table\ConnectionsTable $Connections
 */
class ConnectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $connections = $this->paginate($this->Connections);

        $this->set(compact('connections'));
        $this->set('_serialize', ['connections']);
    }

    /**
     * View method
     *
     * @param string|null $id Connection id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $connection = $this->Connections->get($id, [
            'contain' => []
        ]);

        $this->set('connection', $connection);
        $this->set('_serialize', ['connection']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $connection = $this->Connections->newEntity();
        if ($this->request->is('post')) {
            $connection = $this->Connections->patchEntity($connection, $this->request->data);
            if ($this->Connections->save($connection)) {
                $this->Flash->success(__('The connection has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The connection could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('connection'));
        $this->set('_serialize', ['connection']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Connection id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $connection = $this->Connections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $connection = $this->Connections->patchEntity($connection, $this->request->data);
            if ($this->Connections->save($connection)) {
                $this->Flash->success(__('The connection has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The connection could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('connection'));
        $this->set('_serialize', ['connection']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Connection id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $connection = $this->Connections->get($id);
        if ($this->Connections->delete($connection)) {
            $this->Flash->success(__('The connection has been deleted.'));
        } else {
            $this->Flash->error(__('The connection could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
