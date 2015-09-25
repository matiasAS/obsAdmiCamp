<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cambios Controller
 *
 * @property \App\Model\Table\CambiosTable $Cambios
 */
class CambiosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cambios', $this->paginate($this->Cambios));
        $this->set('_serialize', ['cambios']);
    }

    /**
     * View method
     *
     * @param string|null $id Cambio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cambio = $this->Cambios->get($id, [
            'contain' => []
        ]);
        $this->set('cambio', $cambio);
        $this->set('_serialize', ['cambio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cambio = $this->Cambios->newEntity();
        if ($this->request->is('post')) {
            $cambio = $this->Cambios->patchEntity($cambio, $this->request->data);
            if ($this->Cambios->save($cambio)) {
                $this->Flash->success(__('The cambio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cambio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cambio'));
        $this->set('_serialize', ['cambio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cambio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cambio = $this->Cambios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cambio = $this->Cambios->patchEntity($cambio, $this->request->data);
            if ($this->Cambios->save($cambio)) {
                $this->Flash->success(__('The cambio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cambio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cambio'));
        $this->set('_serialize', ['cambio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cambio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cambio = $this->Cambios->get($id);
        if ($this->Cambios->delete($cambio)) {
            $this->Flash->success(__('The cambio has been deleted.'));
        } else {
            $this->Flash->error(__('The cambio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
