<?php

use Illuminate\Database\Seeder;

class ProdusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produs')->insert([

            [
                'nom' => 'Château Cambon la Pelouse',
                'descriptionText' => 'Annick, Jean-Pierre Marie et leur fils Nicolas ont pris la relève de M de Cambon, créateur du domaine. Depuis 1996, ils ont entièrement reconfiguré les lieux, au niveau de l\'équipement, oui, mais aussi de l\'approche œnologique empreinte d’amour, de créativité et de lucidité.',
                'url' => 'http://www.cambon-la-pelouse.com/',
            ],
            [
                'nom' => 'Château Sénéjac',
                'descriptionText' => 'Sur les terres du Haut Médoc, sur la croupe qui domine la jalle de l’Aygue Longue, au milieu des vignes, d’un parc aux arbres centenaires et de viviers se niche le Château Sénéjac.

                Nicolas de Bloys est le premier propriétaire connu. Au XVIème siècle, ce fougueux écuyer - époux de Jeanne Fleix - planta les premières vignes du domaine.
                
                Au XVIIIe siècle, le château est racheté par Joseph-Ignace de Chatard, conseiller au Parlement de Bordeaux. En 1746, il vend Sénéjac à son neveu, Jean-Louis Baour, futur maire du Pian-Médoc qui entreprend la construction de nouveaux bâtiments.',
                'url' => 'https://www.chateau-senejac.com/',
            ],
            [
                'nom' => 'Château Charmail',
                'descriptionText' => 'Charmail se situe en bord de Gironde, ce qui lui permet de bénéficier d’une certaine douceur dans les températures et d’être à l’abri des fortes gelées d’hiver qui peuvent être dramatiques pour la plantation.',
                'url' => 'http://www.chateau-charmail.fr/charmail.html',
            ],
            [
                'nom' => 'Château Sociando-Mallet',
                'descriptionText' => 'Depuis le 17ème siècle, Sociando-Mallet occupe la butte de Baleyron, l’un des plus beaux terroirs de graves du Médoc. Situé sur la commune de Saint-Seurin-de-Cadourne, au nord de Pauillac, son vignoble domine l’estuaire de la Gironde, lové au creux de la courbe que le fleuve dessine à cet endroit.

                Le terroir de Sociando-Mallet est constitué de graves de l’époque guntzienne, sur un sous sol argilo-calcaire profond. Il permet aux cabernets sauvignons de mûrir dans d’excellentes conditions et aux merlots d’acquérir profondeur et complexité, tout en régulant parfaitement l’alimentation en eau de la vigne. Ce terroir est l’âme des vins de Sociando, qui lui doivent leur structure complexe, leur fraîcheur et leur élégance.',
                'url' => 'https://www.sociandomallet.com/',    
            ],
            [
                'nom' => 'Charles Mignon',
                'descriptionText' => 'Dans la modernité d’une cuverie inox thermorégulée et de petite contenance, la Maison Charles Mignon élabore des champagnes de précision. La mise en valeur de ses terroirs et des trois cépages (Chardonnay, Pinot Meunier, Pinot Noir) à travers des champagnes d’exception lui a valu, et ce depuis 2003, d’être référencée aux côtés des plus grandes et prestigieuses maisons de champagne à travers l’UMC, l’Union des Maisons de Champagne.',
                'url' => 'https://www.champagne-mignon.fr/',
            ],
            [
                'nom' => 'Domaine Chandon de Briailles',
                'descriptionText' => 'Situé à quatre kilomètres de Beaune, en Côte-d\'Or, le Domaine se trouve dans la partie nord de Beaune dénommée Côte de Beaune du Célèbre vignoble bourguignon.

                Sa superficie s\'étend sur 13,7 hectares à parts égales entre les trois communes de Savigny-Lès-Beaune, Pernand-Vergelesses et Aloxe-Corton.',
                'url' => 'http://www.chandondebriailles.com/',
            ],
        ]);
    }
}
