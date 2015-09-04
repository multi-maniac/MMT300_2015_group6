<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Authentication\Result;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session as SessionStorage;

use Zend\Db\Adapter\Adapter as DbAdapter;

use Zend\Authentication\Adapter\DbTable as AuthAdapter;

use Application\Model\Customer;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;
use Application\Form\ContactForm;
use Application\Form\RegistrationForm;
use Application\Form\LoginForm;
use Application\Model\Register;

class IndexController extends AbstractActionController
{
    protected $customerTable;
    public function indexAction()
    {
        return new ViewModel();
    }
    
     public function getCustomerTable()
     {
         if (!$this->customerTable) {
             $sm = $this->getServiceLocator();
             $this->customerTable = $sm->get('Application\Model\CustomerTable');
         }
         return $this->customerTable;
     }
     
     public function customersAction()
     {
          return new ViewModel(array(
             'customers' => $this->getCustomerTable()->fetchAll(),
         ));
     }
    
    public function contactAction()
    {
        // Check if user has submitted the form
         // Create Contact Us form
        $form = new ContactForm();
        
        // Check if user has submitted the form
        if($this->getRequest()->isPost()) {
            
            // Fill in the form with POST data
            $data = $this->params()->fromPost();            
            
            $form->setData($data);
            
            
            // Validate form
            if($form->isValid()) {
                
                // Get filtered and validated data
                $data = $form->getData();
                
                $customer = new Customer();
                $customer->exchangeArray($data);
                /*$email = $data['email'];
                $subject = $data['subject'];
                $body = $data['body'];
                $payment = $data['payment'];*/
                
                //$customer->exchangeArray($form->getData());
                $this->getCustomerTable()->saveCustomer($customer);
                
                
                /*// Send E-mail
                $mailSender = new MailSender();
                if(!$mailSender->sendMail('no-reply@example.com', $email, $subject, $body)) {
                    // In case of error, redirect to "Error Sending Email" page
                    return $this->redirect()->toRoute('application/default', 
                        array('controller'=>'index', 'action'=>'sendError'));
                }*/
                
                // Redirect to "Thank You" page
                return $this->redirect()->toRoute('application/default', 
                        array('controller'=>'index', 'action'=>'thankYou'));
            }               
        } 
        
        // Pass form variable to view
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    
   public function loginAction()
    {
        $view = new viewModel();
        $view->setTemplate('application/index/login');
        return $view;
    }
        
        public function logoutAction()
	{
		$auth = new AuthenticationService();
		// or prepare in the globa.config.php and get it from there
		// $auth = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
		
		if ($auth->hasIdentity()) {
			$identity = $auth->getIdentity();
		}			
		
		$auth->clearIdentity();
//		$auth->getStorage()->session->getManager()->forgetMe(); // no way to get the sessionmanager from storage
		$sessionManager = new \Zend\Session\SessionManager();
		$sessionManager->forgetMe();
		
		return $this->redirect()->toRoute('application/default', array('controller' => 'index', 'action' => 'logout'));		
	}	
    public function thankYouAction() 
    {
        return new ViewModel();
    }
    public function aboutAction() 
    {
        return new ViewModel();
    }
    public function serviceAction() 
    {
        return new ViewModel();
    }
    
    public function howtoknowAction() 
    {
        return new ViewModel();
    }
    
    public function comingoutAction() 
    {
        return new ViewModel();
    }
    
    public function behappyAction() 
    {
        return new ViewModel();
    }
    
    public function respectAction() 
    {
        return new ViewModel();
    }
    
    public function transitionAction() 
    {
        return new ViewModel();
    }
    
    public function bootstrapAction() 
    {
        return new ViewModel();
    }
    
    public function membersAction() 
    {
        return new ViewModel();
    }
    public function resourcesAction() 
    {
        return new ViewModel();
    }
    public function visionAction() 
    {
        return new ViewModel();
    }
    
   
}
