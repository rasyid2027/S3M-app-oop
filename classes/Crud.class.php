<?php 

class Crud extends Dbh
{
    public $id;
    public $name;
    public $skill_id;
    public $region;
    public $s_id;
    public $s_name;

    public function getAllData()
    {
        $sql = "SELECT * FROM santri AS st LEFT JOIN skill AS sk ON st.skill_id = sk.s_id ORDER BY st.id DESC";
        $stmt = $this->connect()->query($sql);

        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataById($data)
    {
        $id = $data;
        $sql = "SELECT * FROM santri WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        

        return $row = $stmt->fetchObject(__CLASS__);
    }

    public function getSkillData()
    {
        $sql = "SELECT * FROM skill";
        $stmt = $this->connect()->query($sql);

        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addData($data)
    {
        $name = htmlspecialchars(ucwords($data['name']));
        $skill_id = htmlspecialchars(ucwords($data['skill_id']));
        $region = htmlspecialchars(ucwords($data['region']));
        $sql = "INSERT INTO santri VALUES (NULL, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $skill_id, $region]);
        

        return $stmt->rowCount();
    }

    public function setData($data)
    {
        $id = $data['id'];
        $name = htmlspecialchars(ucwords($data['name']));
        $skill_id = htmlspecialchars(ucwords($data['skill_id']));
        $region = htmlspecialchars(ucwords($data['region']));
        $sql = "UPDATE santri SET
                    name = ?,
                    skill_id = ?,
                    region = ?
                WHERE id = ?
                ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $skill_id, $region, $id]);
        

        return $stmt->rowCount();
    }

    public function deleteDataById($data)
    {
        $id = $data;
        $sql = "DELETE FROM santri WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        

        return $stmt->rowCount();
    }
}