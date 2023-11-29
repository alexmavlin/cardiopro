<?php

namespace App\Http\Controllers\Mailer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mailer\SendContact1Request;
use App\Http\Requests\Mailer\SendContact2Request;
use App\Http\Requests\Mailer\SendContact3Request;
use App\Http\Requests\Mailer\SendContactRequest;
use Illuminate\Http\Request;

class SendContactController extends Controller
{
    private $validated_data;
    private $email_data;
    private $primary_email = 'contact@cardiopro.fr';

    public function sendContactPage(SendContactRequest $sendContactRequest)
    {
        $this->validated_data = $sendContactRequest->validated();
        //dd($this->validated_data);

        $this->email_data = [
            'form' => 'Contact Page',
            'comapny' => [
                'field' => 'Enterprise: ',
                'value' => isset($this->validated_data['company']) ? $this->validated_data['company'] : '',
            ],
            'nom_et_prenom' => [
                'field' => 'Nom et Pronom: ',
                'value' => isset($this->validated_data['name']) ? $this->validated_data['name'] : '',
            ],
            'email' => [
                'field' => 'Email: ',
                'value' => isset($this->validated_data['email']) ? $this->validated_data['email'] : '',
            ],
            'telephone' => [
                'field' => 'Téléphone: ',
                'value' => isset($this->validated_data['phone']) ? $this->validated_data['phone'] : '',
            ],
            'message' => [
                'field' => 'Message: ',
                'value' => isset($this->validated_data['message']) ? $this->validated_data['message'] : '',
            ],
        ];

        // dd($this->email_data);

        $result = $this->sendFormMail($this->email_data);

        if (!$result) {
            return redirect()->back()->with(['email_message' => 'error']);
        }

        return redirect()->back()->with(['email_message' => 'success']);
    }

    public function sendForm1 (SendContact1Request $sendContactRequest)
    {
        $this->validated_data = $sendContactRequest;

        $this->email_data = [
            'form' => 'Form Page - Achat',
            'comapny' => [
                'field' => 'Enterprise: ',
                'value' => isset($this->validated_data['company2']) ? $this->validated_data['company'] : '',
            ],
            'nom_et_prenom' => [
                'field' => 'Nom et Pronom: ',
                'value' => isset($this->validated_data['name2']) ? $this->validated_data['name'] : '',
            ],
            'email' => [
                'field' => 'Email: ',
                'value' => isset($this->validated_data['email2']) ? $this->validated_data['email'] : '',
            ],
            'telephone' => [
                'field' => 'Téléphone: ',
                'value' => isset($this->validated_data['phone2']) ? $this->validated_data['phone'] : '',
            ],
            'price' => [
                'field' => 'Price: ',
                'value' => isset($this->validated_data['price2']) ? $this->validated_data['price2'] : '',
            ],
            'type' => [
                'field' => 'Type: ',
                'value' => isset($this->validated_data['type2']) ? $this->validated_data['type2'] : '',
            ],
        ];

        $result = $this->sendFormMail($this->email_data);

        if (!$result) {
            return redirect()->back()->with(['email_message' => 'error']);
        }

        return redirect()->back()->with(['email_message' => 'success']);
    }

    public function sendForm2(SendContact2Request $sendContactRequest)
    {
        $this->validated_data = $sendContactRequest;

        $this->email_data = [
            'form' => 'Form Page - Achat',
            'comapny' => [
                'field' => 'Enterprise: ',
                'value' => isset($this->validated_data['company2']) ? $this->validated_data['company'] : '',
            ],
            'nom_et_prenom' => [
                'field' => 'Nom et Pronom: ',
                'value' => isset($this->validated_data['name2']) ? $this->validated_data['name'] : '',
            ],
            'email' => [
                'field' => 'Email: ',
                'value' => isset($this->validated_data['email2']) ? $this->validated_data['email'] : '',
            ],
            'telephone' => [
                'field' => 'Téléphone: ',
                'value' => isset($this->validated_data['phone2']) ? $this->validated_data['phone'] : '',
            ],
            'price' => [
                'field' => 'Price: ',
                'value' => isset($this->validated_data['price2']) ? $this->validated_data['price2'] : '',
            ],
            'type' => [
                'field' => 'Type: ',
                'value' => isset($this->validated_data['type2']) ? $this->validated_data['type2'] : '',
            ],
        ];

        $result = $this->sendFormMail($this->email_data);

        if (!$result) {
            return redirect()->back()->with(['email_message' => 'error']);
        }

        return redirect()->back()->with(['email_message' => 'success']);
    }

    public function sendForm3(SendContact3Request $sendContactRequest)
    {
        $this->validated_data = $sendContactRequest->validated();

        $this->email_data = [
            'form' => 'Form Page - Je ne sais pas',
            'comapny' => [
                'field' => 'Enterprise: ',
                'value' => isset($this->validated_data['company3']) ? $this->validated_data['company'] : '',
            ],
            'nom_et_prenom' => [
                'field' => 'Nom et Pronom: ',
                'value' => isset($this->validated_data['name3']) ? $this->validated_data['name'] : '',
            ],
            'email' => [
                'field' => 'Email: ',
                'value' => isset($this->validated_data['email3']) ? $this->validated_data['email'] : '',
            ],
            'telephone' => [
                'field' => 'Téléphone: ',
                'value' => isset($this->validated_data['phone3']) ? $this->validated_data['phone'] : '',
            ],
        ];

        $result = $this->sendFormMail($this->email_data);

        if (!$result) {
            return redirect()->back()->with(['email_message' => 'error']);
        }

        return redirect()->back()->with(['email_message' => 'success']);
    }

    private function sendFormMail($data) {
        $address = $this->primary_email;
        $e_subject = "Message depuis le site web CardioPro.";
        $e_body = "Vous avez été contacté par un utilisateur." . PHP_EOL . PHP_EOL;
        $e_content = "Form:\r\n" . $this->email_data['form'] . PHP_EOL . PHP_EOL;
        foreach ($this->email_data as $key => $value)
        {
            if ($key != 'form')
            {
                $e_content .= $value['field'] . $value['value'] . PHP_EOL . PHP_EOL;
            }
        }
        $headers = "From: info@triaconst.cz\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/plain; charset=utf-8\n";
        $headers .= "Content-Transfer-Encoding: 8bit\n";

        $msg = wordwrap($e_body . $e_content, 70);

        if (mail($address, $e_subject, $msg, $headers)) {
            return true;
        } else {
            return false;
        }
    }
}
