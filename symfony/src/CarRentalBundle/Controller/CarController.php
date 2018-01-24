<?php

namespace CarRentalBundle\Controller;

use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use CarRentalBundle\Entity\Car;
use CarRentalBundle\Form\CarType;

/**
 * @Rest\RouteResource("Car", pluralize=false)
 */
class CarController extends Controller
{
    /**
     * @Rest\View()
     *
     * @param Request $request
     * @return array
     */
    public function postAction(Request $request)
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->submit($request->request->all());

        if ($form->isValid() ) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($car);
            $em->flush();
            return $car;
        } else {
            return $form;
        }
    }

    /**
     * @param Car|null $car
     * @param Request|null $request
     * @return Form
     */
    protected function getForm(Car $car = null, Request $request = null): Form
    {
        $form = $this->createForm(CarType::class, $car ?: new Car());

        if ($request) {
            $form->handleRequest($request);
        }

        return $form;
    }
}
