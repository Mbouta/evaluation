<?php

class Visiteur implements Temoignage,Horaire,Voiture,Services
{

    /**
     * @param $data
     * array K_V pour sotocher les data dans lá table
     * @return int
     * 200 insertion OK
     * 500 BAD
     */
    public function contactAdmin($data){
        $crud = new Crud();
        $res = $crud->insert("contact",$data);
        if ($res>0){
            return 200;
        }
        return 500;
    }

    /**
     * @param $data
     * array K_V pour sotocher les data dans lá table
     * @return int
     * 200 insertion OK
     * 500 BAD
     */
    public function createTemoignage($data): int
    {
        // TODO: Implement createTemoignage() method.
        $crud = new Crud();
        $res = $crud->insert("temoignage",$data);
        if ($res>0){
            return 200;
        }
        return 500;
    }

    public function selectAllHoraire(): bool|array
    {
        // TODO: Implement selectAllHoraire() method.
        $crud = new Crud();
        $response = $crud->selectAll("horaires");
        return $response;
    }

    public function selectOneHoraire($id_horaire)
    {
        // TODO: Implement selectOneHoraire() method.
        $crud = new Crud();
        $response = $crud->selectOne("horaires",$id_horaire);
        return $response;
    }

    public function selectAllVoiture(): bool|array
    {
        // TODO: Implement selectAllVoiture() method.
        $crud = new Crud();
        $response = $crud->selectAll("voitures");
        return $response;
    }

    public function selectOneVoiture($id_voiture): ?array
    {
        // TODO: Implement selectOneVoiture() method.
        $crud = new Crud();
        $response = $crud->selectOne("voitures",$id_voiture);
        return $response;
    }

    public function selectVoitureImage($condition): bool|array
    {
        // TODO: Implement selectVoitureImage() method.
        $crud = new Crud();
        $response = $crud->selectByFieldWhereOR("galerie_image_voiture",$condition);
        return $response;
    }

    public function searchVoiture($pattern): bool|array
    {
        // TODO: Implement searchVoiture() method.
        $crud = new Crud();
        $response = $crud->selectWithLike("voitures",$pattern);
        return $response;
    }

    public function selectAllService(): bool|array
    {
        // TODO: Implement selectAllService() method.
        $crud = new Crud();
        $response = $crud->selectAll("services");
        return $response;
    }

    public function selectOneService($id_services): ?array
    {
        // TODO: Implement selectOneService() method.
        $crud = new Crud();
        $response = $crud->selectOne("services",$id_services);
        return $response;
    }
}