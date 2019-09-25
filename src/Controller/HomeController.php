<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    
    /**
     * @Route("/", name="home", )
     */
    public function index()
    {
        $cards = ["id"=>[0,1,2,3,4,5,6,7,8,9,10],
        "title"=>["Crypto","Spectre","Smart","Black","EndGame","BlockChain","Quantique","Critical","Box","Titan","Force"],
        "content"=>["Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis f",
        "ue proeliorum periti rectores primo catervas densas opponunt et fortes, deinde leves armaturas, post iaculatores ultimasque subsidiales acies, si fors adegerit, iuvaturas, ita praepositis urbanae familiae suspensae digerentibus sollicite, quos insignes faciunt virgae dexteris aptatae v",
        "naturae, eandemque ab instituto cursu retorquens, quae inter ipsa oriundi crepundia per primigenios seminis fon",
        "iecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia ",
        "itares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discret",
        "Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiore",
        "condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo",
        "os impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa ",
        "Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias ",
        "Per hoc minui studium suum existimans Paulus, ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum e",
        "od vult, et dicit plane, quod intellegam; et tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus."
    ],
        "price"=>["1","2","3","4","5","6","7","8","9","10","11"],
        "created_date"=>["2019/09","2019/08","2019/07","2019/06","2019/05","2019/04","2019/03","2019/02","2019/01","2019/00"]
    ];

        return $this->render('home/index.html.twig',[
            "cards"=>$cards
        ]);
    }


    /**
     * @Route("/annoncement/{page}", 
     * name="annoncement",
     * requirements={"page"="\d+"})
     */
    public function annoucement(int $page=1)
    {
        $cards = ["id"=>[0,1,2,3,4,5,6,7,8,9,10],
        "title"=>["Crypto","Spectre","Smart","Black","EndGame","BlockChain","Quantique","Critical","Box","Titan","Force"],
        "content"=>["Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis f",
        "ue proeliorum periti rectores primo catervas densas opponunt et fortes, deinde leves armaturas, post iaculatores ultimasque subsidiales acies, si fors adegerit, iuvaturas, ita praepositis urbanae familiae suspensae digerentibus sollicite, quos insignes faciunt virgae dexteris aptatae v",
        "naturae, eandemque ab instituto cursu retorquens, quae inter ipsa oriundi crepundia per primigenios seminis fon",
        "iecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia ",
        "itares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discret",
        "Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiore",
        "condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo",
        "os impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa ",
        "Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias ",
        "Per hoc minui studium suum existimans Paulus, ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum e",
        "od vult, et dicit plane, quod intellegam; et tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus."
    ],
        "price"=>["1","2","3","4","5","6","7","8","9","10","11"],
        "created_date"=>["2019/09","2019/08","2019/07","2019/06","2019/05","2019/04","2019/03","2019/02","2019/01","2019/00"]
    ];
        

        return $this->render('home/annoncement.html.twig',[
            'cards'=>$cards
        ]);
    }

    /**
     * @Route("/annoncement/{id}/detail", 
     * name="annoncement_detail",
     * requirements={"id"="[0-9]+"})
     */
    public function annoucement_detail(int $id)
    {
        $cards = ["id"=>[0,1,2,3,4,5,6,7,8,9,10],
        "title"=>["Crypto","Spectre","Smart","Black","EndGame","BlockChain","Quantique","Critical","Box","Titan","Force"],
        "content"=>["Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis f",
        "ue proeliorum periti rectores primo catervas densas opponunt et fortes, deinde leves armaturas, post iaculatores ultimasque subsidiales acies, si fors adegerit, iuvaturas, ita praepositis urbanae familiae suspensae digerentibus sollicite, quos insignes faciunt virgae dexteris aptatae v",
        "naturae, eandemque ab instituto cursu retorquens, quae inter ipsa oriundi crepundia per primigenios seminis fon",
        "iecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia ",
        "itares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discret",
        "Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiore",
        "condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo",
        "os impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa ",
        "Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias ",
        "Per hoc minui studium suum existimans Paulus, ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum e",
        "od vult, et dicit plane, quod intellegam; et tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus."
    ],
        "price"=>["1","2","3","4","5","6","7","8","9","10","11"],
        "created_date"=>["2019/09","2019/08","2019/07","2019/06","2019/05","2019/04","2019/03","2019/02","2019/01","2019/10"]
    ];
        return $this->render('home/annoncement_detail.html.twig',[
            'id'=>$id,
            'cards'=> $cards
        ]);
    }


    /**
     * @Route("/annoncement/add", 
     * name="annoncement_add",
     * methods={"GET","POST"})
     */
     public function annoucement_add()
     {
        return $this->render("home/annoucement_add.html.twig");
     }

}
