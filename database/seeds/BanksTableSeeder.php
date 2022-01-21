<?php

use Illuminate\Database\Seeder;
use App\Bank;
class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                'name' => 'Visa Bank',
                'registered_name' => 'VISA FUND MANAGEMENT',
                'slug' => 'visa-bank',
                'bic' => 'VIEXHKH1',
                'website' => 'https://visabank.co',
                'email' => 'info@visabank.co',
                'address' => '17/F, 88, Gloucester Rd, Wan Chai, Hong Kong',
                'headquarter' => 'Hong Kong',
                'certification' => 'advanced',
                'presence' => 0,
                'total_income' => 1379,
                'total_assets' => 133442,
                'currency'=>'HKD',
                'employee' => 12,
                'short_description' => 'The VISA FUND MANAGEMENT, operating as VISA BANK is one of the offshore largest banks in the Asia Pacific by deposits and market capitalization.',
                'description' => ' <p>The VISA FUND MANAGEMENT, operating as VISA BANK is one of the offshore largest
                                        banks in the Asia Pacific by deposits and market capitalization. It serves more
                                        than 7000 customers in over 25 countries around the world and offers a range of
                                        products and services including personal and commercial banking, wealth
                                        management, corporate and investment banking with assets of $856.5 billion, VISA
                                        BANK shares trade on the UK and Hong Kong Stock Exchanges.</p>
                                    <p>The bank was incorporated by the Majestic Boulevard on March 30, 2004, in Hong
                                        Kong</p>
                                    <p>VISA BANK has billed itself as “Hong Kong’s most international bank” due to its
                                        acquisitions primarily in Asia and also in Europe and UAE.</p>
                                    <p>Our Correspondent bank from 100 biggest bank.</p>

                                    <h5>Operating Units</h5>
                                    <p>Visa Bank has four business lines:</p>
                                    <p>Hong Kong Banking provides a full suite of financial advice and banking
                                        solutions, supported by an excellent customer experience, to personal and
                                        business customers across Hong Kong.</p>
                                    <p>International Banking provides a full range of financial products, solutions and
                                        advice to retail and commercial customers in select regions outside of Hong
                                        Kong, supplemented by additional products and services offered by Global Banking
                                        & Markets and Global Wealth & Insurance to meet customers’ needs.</p>
                                    <p>Global Wealth & Insurance (GWI)combines the Bank’s wealth management and
                                        insurance operations in Canada and internationally, and Global Transaction
                                        Banking. GWI is diversified across geographies and product lines.Global Banking
                                        & Markets, Visa Bank’s wholesale banking and capital markets arm, offers a wide
                                        variety of products and services to corporate, government and institutional
                                        investor clients globally.</p>

                                    <p>The intruders chased the girl in the house and threatened her when she hid from
                                        them, according to the PSNI Limavady Facebook page.</p>
                                    <p>"She came out petrified with her Piggy Bank, HER PIGGY BANK! hoping that the men
                                        would take it and leave her dad alone," one outraged officer wrote.</p>',
                'blockquote'=>'VISA Bank was incorporated by the Majestic Boulevard on March 30, 2004, in Hong Kong',
                'founded'=>\Carbon\Carbon::now(),
                'img_1'=>'/images/banks/visabank-main.jpg',
                'img_2'=>'/images/banks/visabank-office-2.jpg',
                'status'=>1
            ],
            [
                'name' => 'MJC Bank',
                'slug' => 'mjc-bank',
                'bic' => 'VIEXHKH1',
                'website' => 'https://visabank.co',
                'email' => 'info@visabank.co',
                'address' => '17/F, 88, Gloucester Rd, Wan Chai, Hong Kong',
                'headquarter' => 'Hong Kong',
                'certification' => 'advanced',
                'presence' => 0,
                'total_income' => 1379,
                'total_assets' => 133442,
                'currency'=>'HKD',
                'employee' => 12,
                'short_description' => 'MJC BANK is an online banking which enables several banking services like online banking & bank instruments & investment & other banking services.',
                'description' => '',
                'founded'=>\Carbon\Carbon::now(),
                'img_1'=>'/images/banks/visabank-main.jpg',
                'img_2'=>'/images/banks/visabank-office-2.jpg',
                'status'=>1
            ],
            [
                'name' => 'BNP Paribas Bank',
                'slug' => 'bnp-paribas-bank',
                'bic' => 'VIEXHKH1',
                'website' => 'https://visabank.co',
                'email' => 'info@visabank.co',
                'address' => '17/F, 88, Gloucester Rd, Wan Chai, Hong Kong',
                'headquarter' => 'Hong Kong',
                'certification' => 'advanced',
                'presence' => 0,
                'total_income' => 1379,
                'total_assets' => 133442,
                'currency'=>'HKD',
                'employee' => 12,
                'short_description' => 'BNP Paribas Hong Kong is one of the top foreign banks operating in the region. The bank acts as a part of international financial group BNP Paribas, based in France.',
                'description' => '',
                'founded'=>\Carbon\Carbon::now(),
                'img_1'=>'/images/banks/visabank-main.jpg',
                'img_2'=>'/images/banks/visabank-office-2.jpg',
                'status'=>1
            ],
        ];
       foreach ($banks as $bank)
       {
           Bank::create($bank);
       }
    }
}
