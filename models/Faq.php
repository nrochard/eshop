<?php


function getAllQuestions(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM faq');
    $allQuestion = $query->fetchAll();

    return $allQuestion;
}

function getQuestion($categoryId){

    $db = dbConnect();
    $query = $db->query('SELECT * FROM faq WHERE id = ' . $categoryId);
    $selectedQuestion = $query->fetch();

    return $selectedQuestion;
}

function updateQuestion($id, $informations){

    $db = dbConnect();

    $query = $db->prepare('UPDATE faq SET question = ?, answer = ? WHERE id = ?');

    $result = $query->execute(
        [
            $informations['question'],
            $informations['answer'],
            $id,
        ]
    );

    return($result);

}

function deleteQuestion($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM faq WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}

function addQuestion($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO faq (question, answer) VALUES( :question, :answer)");
    $result = $query->execute([
        'question' => $informations['question'],
        'answer' => $informations['answer'],
    ]);

    return $result;
}