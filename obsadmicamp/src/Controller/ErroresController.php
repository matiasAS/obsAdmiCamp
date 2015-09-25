<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Errores Controller
 *
 * @property \App\Model\Table\ErroresTable $Errores
 */
class ErroresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('errores', $this->paginate($this->Errores));
        $this->set('_serialize', ['errores']);
    }

    /**
     * View method
     *
     * @param string|null $id Errore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $errore = $this->Errores->get($id, [
            'contain' => []
        ]);
        $this->set('errore', $errore);
        $this->set('_serialize', ['errore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $errore = $this->Errores->newEntity();
        if ($this->request->is('post')) {
            $errore = $this->Errores->patchEntity($errore, $this->request->data);
            if ($this->Errores->save($errore)) {
                $this->Flash->success(__('The errore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The errore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('errore'));
        $this->set('_serialize', ['errore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Errore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $errore = $this->Errores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $errore = $this->Errores->patchEntity($errore, $this->request->data);
            if ($this->Errores->save($errore)) {
                $this->Flash->success(__('The errore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The errore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('errore'));
        $this->set('_serialize', ['errore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Errore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $errore = $this->Errores->get($id);
        if ($this->Errores->delete($errore)) {
            $this->Flash->success(__('The errore has been deleted.'));
        } else {
            $this->Flash->error(__('The errore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
