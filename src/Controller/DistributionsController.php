<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Distributions Controller
 *
 * @property \App\Model\Table\DistributionsTable $Distributions
 */
class DistributionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $distributions = $this->paginate($this->Distributions);

        $this->set(compact('distributions'));
        $this->set('_serialize', ['distributions']);
    }

    /**
     * View method
     *
     * @param string|null $id Distribution id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $distribution = $this->Distributions->get($id, [
            'contain' => []
        ]);

        $this->set('distribution', $distribution);
        $this->set('_serialize', ['distribution']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $distribution = $this->Distributions->newEntity();
        if ($this->request->is('post')) {
            $distribution = $this->Distributions->patchEntity($distribution, $this->request->data);
            if ($this->Distributions->save($distribution)) {
                $this->Flash->success(__('The distribution has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The distribution could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('distribution'));
        $this->set('_serialize', ['distribution']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Distribution id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $distribution = $this->Distributions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $distribution = $this->Distributions->patchEntity($distribution, $this->request->data);
            if ($this->Distributions->save($distribution)) {
                $this->Flash->success(__('The distribution has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The distribution could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('distribution'));
        $this->set('_serialize', ['distribution']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Distribution id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $distribution = $this->Distributions->get($id);
        if ($this->Distributions->delete($distribution)) {
            $this->Flash->success(__('The distribution has been deleted.'));
        } else {
            $this->Flash->error(__('The distribution could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
