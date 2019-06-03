<?php

use Illuminate\Database\Seeder;

class VinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vins')->insert([
            [
                'produ_id' => '1',
                'appel_id' => '2',
                'frmt_id' => '4',
                'regn_id' => '1',
                'prix_id' => '1',
                'condi_id' => '2',
                'nom' => 'Château Cambon la Pelouse',
                'descriptionText' => 'Figurant parmi les plus anciens châteaux du Médoc, la propriété expédie ses vins en Angleterre dès le XVIIe siècle et en Hollande à partir du XVIIIe siècle. Sous la révolution, le château a appartenu à la famille de Cambon, à qui il doit son nom. Le vignoble, entièrement décimé lors du gel de 1956 et partiellement transformé alors en champ céréalier, a été replanté en 1975 et a une moyenne d’âge d’une trentaine d’années.
                
                Il est très bien situé, en hauteur entre deux crus classés, Giscours et Cantemerle, près de Macau sur la route de Margaux et Pauillac, au bord de la Gironde. Annick et Jean-Pierre Marie, qui vient de la grande distribution, le rachètent en 1996 et mettent tout en oeuvre pour lui redonner son lustre en réalisant d’importants investissements. Le domaine possède aujourd’hui 60 hectares de vignes au total, plantées avec une densité de 5000 à 7000 pieds / ha sur un sol de graves maigres sur une partie de la propriété et de grosses graves du quaternaire ailleurs.',
                'alcool' => '13.5°',
                'apogee' => '2022 - 2038',
                'millesime' => '2015',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => false,
                'cotation' => null,
                'classement' => 'Cru Bourgeois supérieur',
                'stock' => 1000,
            ],
            [
                'produ_id' => '2',
                'appel_id' => '2',
                'frmt_id' => '1',
                'regn_id' => '1',
                'prix_id' => '2',
                'condi_id' => '3',
                'nom' => 'Château Sénéjac',
                'descriptionText' => 'Sénéjac et le vin, c\'est une longue histoire. Au 16ème siècle, selon toute vraisemblance, on y produisait déjà du vin. Au milieu de 19ème, la production était de 100 000 bouteilles, soit la moitié de ce qui s\'y fait aujourd\'hui. Depuis 1999, ce Cru Bourgeois est entre les mains de la famille Bignon-Cordier qui possède également le château Talbot, un Grand Cru classé de Saint-Julien.',
                'alcool' => '13°',
                'apogee' => '2020 - 2035',
                'millesime' => '2015',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => false,
                'cotation' => null,
                'classement' => 'Cru Bourgeois supérieur',
                'stock' => 1000,
            ],
            [
                'produ_id' => '3',
                'appel_id' => '2',
                'frmt_id' => '1',
                'regn_id' => '1',
                'prix_id' => '3',
                'condi_id' => '1',
                'nom' => 'Château Charmail',
                'descriptionText' => 'Tirant son nom d\'une famille d\'origine bretonne qui s’installe en Médoc au 16ème siècle, les Trevey de Charmail, ce domaine viticole se fait connaître au début du 18ème. Propriétaire de Château Mayne-Vieil à Fronsac, l’ingénieur agronome Roger Sèze achète la propriété entre 1980 et 1981, et reconstruit le chai et le château.',
                'alcool' => '13.5°',
                'apogee' => '2020 - 2035',
                'millesime' => '2015',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => false,
                'cotation' => null,
                'classement' => 'Cru Bourgeois supérieur',
                'stock' => 1000,
            ],
            [
                'produ_id' => '4',
                'appel_id' => '2',
                'frmt_id' => '1',
                'regn_id' => '1',
                'prix_id' => '4',
                'condi_id' => '1',
                'nom' => 'Château Sociando-Mallet',
                'descriptionText' => 'Ce Château est régulièrement un de nos best-sellers. Cette propriété, située tout au nord du Médoc, a réussi en l\'espace de 40 ans à se hisser parmi l\'élite des vins rouges de Bordeaux. Ceci grâce au travail inlassable de son propriétaire, M. Jean Gautreau. Lors de nombreuses dégustations à l\'aveugle, il surclasse régulièrement de nombreux grands crus classés prestigieux.',
                'alcool' => '13.5°',
                'apogee' => '2021 - 2039',
                'millesime' => '2014',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => false,
                'cotation' => null,
                'classement' => null,
                'stock' => 1000,
            ],
            [
                'produ_id' => '5',
                'appel_id' => '1',
                'frmt_id' => '1',
                'regn_id' => '2',
                'prix_id' => '5',
                'condi_id' => '3',
                'nom' => 'Champagne Charles Mignon 1er Cru "Premium Reserve Brut"',
                'descriptionText' => 'La maison de Champagne Charles Mignon est l\'une des rares maisons à caractère familial à être membre de l\'Union de Maisons de Champagne. Quatre générations ont perpétué avec passion et savoir-faire les plus nobles traditions champenoises. Bruno, l\'arrière-petit-fils, a repris le flambeau en 1995. ',
                'alcool' => '12°',
                'apogee' => '',
                'millesime' => '0',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => false,
                'cotation' => null,
                'classement' => null,
                'stock' => 1000,
            ],
            [
                'produ_id' => '6',
                'appel_id' => '2',
                'frmt_id' => '1',
                'regn_id' => '3',
                'prix_id' => '6',
                'condi_id' => '2',
                'nom' => 'Champagne Charles Mignon 1er Cru "Premium Reserve Brut"',
                'descriptionText' => 'Le Domaine Chandon de Briailles s\'étend sur 13 hectares de vignes en Côte de Beaune, en Bourgogne. Propriété familiale depuis 1834, le domaine est géré par le comte et la comtesse Aymard-Claude de Nicolay et leurs enfants. Le comte de Nicolay l\'avait hérité de sa grand-mère, la comtesse Chandon de Briailles, apparentée à la maison de Champagne Moët et Chandon.

                Le Domaine bourguignon Chandon de Briailles privilégie la tradition, avec une forte proportion de vendange entière et surtout pratiquement pas de fûts chêne neufs dans l\'élevage. Dans leur jeunesse, les vins semblent plutôt peu expressifs, mais gagnent beaucoup de complexité après quelques années de vieillissement. Les vins de Chandon de Briailles jouent surtout dans un registre de finesse et d\'élégance plutôt que de puissance.',
                'alcool' => '13°',
                'apogee' => '2022 - 2043',
                'millesime' => '2013',
                'photoUrl' => null,
                'estBio' => false,
                'estVds' => true,
                'cotation' => null,
                'classement' => null,
                'stock' => 1000,
            ],
        ]);
    }
}
