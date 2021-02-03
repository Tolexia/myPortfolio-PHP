<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Asset;
use App\Entity\Project;
use App\Form\AssetType;
use App\Service\FileUploader;

class AssetController extends AbstractController
{
    /**
     * @Route("/{project}/asset/new", name="asset_new")
     */
    public function new(Request $request, Project $project, FileUploader $fileUploader): Response
    {
        $asset = new Asset();
        $form = $this->createForm(AssetType::class, $asset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assets = $form->get('image')->getData();
            foreach ($assets as $asset) {
                $fileUploader->upload($asset, $project);
                $asset->setProject($project);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($asset);
            }
           
            $entityManager->flush();

            return $this->redirectToRoute('project_show', ['id' => $project->getId()]);
        }

        return $this->render('project/new.html.twig', [
            'asset' => $asset,
            'form' => $form->createView(),
        ]);
    }
}
