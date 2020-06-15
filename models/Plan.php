 <?php

function getAllPlans(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM plans');
    $plans = $query->fetchAll();

    return $plans;
}

function getPlan($planId){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM plans WHERE id = ' . $planId);
    $selectedPlan = $query->fetch();

    return $selectedPlan;
}

function deletePlan($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM plans WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}

function addPlan($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO plans (name, tag, price, feature1, feature2, feature3, duration) VALUES( :name, :tag, :price, :feature1, :feature2, :feature3, :duration)");
    $result = $query->execute([
        'name' => $informations['name'],
        'tag' => $informations['tag'],
        'price' => $informations['price'],
        'feature1' => $informations['feature1'],
        'feature2' => $informations['feature2'],
        'feature3' => $informations['feature3'],
        'duration' => $informations['duration'],
    ]);

    return $result;
}

function updatePlan($id, $informations){

    $db = dbConnect();

    $query = $db->prepare('UPDATE plans SET name = ?, tag = ?, price = ?, feature1 = ?, feature2 = ?, feature3 = ?, duration = ? WHERE id = ?');

    $result = $query->execute(
        [
            $informations['name'],
            $informations['tag'],
            $informations['price'],
            $informations['feature1'],
            $informations['feature2'],
            $informations['feature3'],
            $informations['duration'],
            $id,
        ]
    );

    return($result);

}
