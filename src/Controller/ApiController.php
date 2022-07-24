<?php
namespace App\Controller;

use App\Entity\ChildItemsDataMaster;
use App\Repository\ChildItemsDataMasterRepository;
use App\Entity\ItemAttention;
use App\Repository\ItemAttentionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends Controller
{
    /**
     * @Route("/items", name="items")
     */
    public function itemsAction()
    {
        $items = $this->getDoctrine()
            ->getRepository(ChildItemsDataMaster::class)
            ->getAll();
        //    print_r($items);
        $result = [];
        $attensionRepository = $this->getDoctrine()
            ->getRepository(ItemAttention::class);
           

        foreach ($items as $key => $item) {

            $attensions = $attensionRepository->getByItemId($item['id']);
            $item['attensions'] = $attensions;

            $result[] = $item;
 //print_r($attensions);
            /*$result[] = [
                'item_id' => $item->getItemId(),
                'parent_id' => $item->getParentId(),
                'website_id' => $item->getWebsiteId(),
                'thanks_id' => $item->getThanksId(),
                'long_title' => $item->getLongTitle(),
                'short_title' => $item->getShortTitle(),
                'attensions' => $attensions
            ];*/

        }
        //print_r($result);
        return $this->json($result);
    }

}