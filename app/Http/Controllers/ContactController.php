<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller {
    public function showContact($id) {
        $contact = Contact::find($id);
        //return "Display contact where id is: $id";
        return $contact;
    }

    public function add() {
        $contact = new Contact();
        $contact->name = str_random(10);
        $contact->phone = rand(1000000000,9999999999);
        $contact->email = str_random(10).'@host.com';
        $contact->save();
        return $contact;
    }

    public function update($id) {
        Contact::where('id',$id)
            ->update([
                'name' => str_random(10),
                'phone' => rand(1000000000,9999999999),
                'email' => str_random(10).'@host.com',
        ]);
        return Contact::find($id);
    }

    public function delete($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return "Contact Deleted";
    }


}
?>
