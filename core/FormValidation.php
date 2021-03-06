<?php
  class FormValidation {
       protected $Rules;
       protected $Errors;

       public function isNotEmpty($data) {
          return is_null($data);
     }

     public function isInteger($data) {
          return is_int($data);
     }

          public function isLess($data, $value) {
          if (is_int($data))
               return ($data >= $value);
          return false;
     }

     public function isGreater($data, $value) {
       if (is_int($data))
            return ($data <= $value);
       return false;
     }

     public function SetRule($field_name, $validator_name) {
         $this->Rules[$field_name] = $validator_name;
         return $this;
     }

     public function Validate($post_array) {
         foreach($this->Rules as $key => $value) {
           if ($this->isNotEmpty($post_array[$key])) {
             $this->Errors[$key] = "Поле не заполнено";
           }
           $matches = preg_match($value, $post_array[$key]);
           if ($matches == 0) {
                $this->Errors[$key] = "Поле заполнено неверно";
            }
         }
     }

     public function ShowErrors() {
         $Errors = "<div class='alert";
         if (count($this->Errors) == 0) {
           $Errors .= "alert-success'>";
           $Errors .= "<p>Ваше сообщение отправлено</p>";
         }  else {
           $Errors .= "alert-warning'>";
           foreach($this->Errors as $error => $value) {
             if ($error == "_replyto") {
             $Errors .= "<p> Ошибка: email - " . $value . "</p>";
             } else {
      $Errors .= "<p> Ошибка: ". $error. " - " . $value . "</p>";
           }
          }
        }
         return $Errors ."</div>";
     }
  }

class TestValidation extends FormValidation{

    public function gradeTest($post_array) {
        $valid = true;
        $result = 0;
        $name = true;
        if ($post_array['name'] == "") {
            $name = false;
        } else {
            if ($post_array['whatis'] != "мера, выражающая то, насколько возможно данное событие по отношению к другим исходам"
                && $post_array['whatis'] != "степень возможности наступления некоторого события") {
                $this->Errors['Первый ответ'] = "Неверный ответ";
                $valid = false;
            } else {
                $result++;
            }

            if ($post_array['test3'] != 2) {
                $this->Errors['Третий ответ'] = "Неправильный вариант ответа";
                $valid = false;
            } else {
                $result++;
            }


            if ($post_array['test2'] != "value4") {
                $this->Errors['Второй ответ'] = "Неправильный вариант ответа";
                $valid = false;
            } else {
                $result++;
            }
        }
        if (!$name) {
            return "<h2>Неправльно введено ФИО</h2>";
        } else {
            if ($valid) {
                return "<h2>Поздравляем! Вы успешно прошли тест!</h2>";
            } else {
                return "<h2>К сожалению, вы ответили правильно только на $result/3 вопросов.</h2> ";
            }
        }
    }
}



