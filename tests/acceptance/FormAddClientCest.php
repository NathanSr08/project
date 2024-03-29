<?php


namespace App\Tests\Acceptance;

use App\Tests\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToLogin_AddClient(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->submitForm('#salut', [
          'email' => 'admin@admin.com', 
          'password' => 'Nathan55'
        ]);
        $I->see('Ajouter un Client');
        $I->amOnPage('/colab/addclient');
        $I->submitForm('#add_client', [
            'client[Nom]' => 'Sroussi',
            'client[Prenom]' => 'Nathan',
            'client[Mail]' => 'Nathansroussi@gmail.com',
            'client[nom_Societe]' => 'ORT',
            'client[Adresse]' => '22 Avenue Paul cezanne',
            'client[Num_pro]' => '0766522116',
            'client[Cp]' => intval('95200'),
            'client[Ville]' => 'Sarcelles',
            'client[num_siret]' => '0987654567',
            'client[id_adm]' => '7',
            'client[_token]' => $I->grabAttributeFrom('input[name="client[_token]"]', 'value')

          ]);
        $I->see('Liste des clients');
        $I->see('ORT');


    }

}
