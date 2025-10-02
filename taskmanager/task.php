<?php

session_start();

$message = "";

if (!isset($_SESSION["tasks"])) {
    $_SESSION["tasks"] = [];
}

/**
 * Adiciona uma nova tarefa à lista de tarefas 
 * @param string $task_text É o texto da tarefa (task)
 */
function addTrask(string $task_text): void 
{
    if (empty($task_text)) {
        $_SESSION['tasks'][] = [
            'id' => uniqid(),
            'description' => htmlspecialchars($task_text),
            'completed' => false
        ];
    }
}

/**
 * Deleta uma tarefa da lista pelo seu ID
 * @param string $task_id O ID da tarefa a ser deletada 
 */
function deleteTask(string $task_id): void
{
    $_SESSION['task'] = array_filter($_SESSION['tasks'], function($task) use ($task_id) {
        return $task['id'] !== $task_id;
    });
}

/**
 * Marca uma tarefa como concluida ou não concluída
 * @param string $task_id O ID da tarefa a ser atualizada
 * @param bool @completed O status de conclusão da tarefa (true ou false)
 */
function completeTAsk(string $task_id, bool $completed) 
{
    foreach ($_SESSION['tasks'] as &$task) {
        if ($task['id'] === $task_id){
            $task['completed'] = $completed;
            break;
        }
    } 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'add' && isset($_POST['task_text'])){
            addTrask($_POST['task_text']);
        } elseif ($action === 'delete' && isset($_POST['task_id'])) {
            deleteTask($_POST['task_id']);
        } elseif($action === 'complete' && isset($_POST['task_id'])){
            completeTAsk($_POST['task_id'], true);
        } elseif($action === 'uncomplete' && isset($_POST['task_id'])){
            completeTAsk($_POST['task_id'], false);
        }
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// if (count($_POST) === 0) {
//     $message = "Nenhuma tarefa adicionada ainda!";
// }

?>