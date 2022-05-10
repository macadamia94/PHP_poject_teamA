<?php
    $name= "홍길동";
    $age= 22;
    $height= 177.32;
    $blood_type= 'O';

    printf("제 이름은 %s 입니다. 나이는 %4d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다.",
        $name, $age, $height, $blood_type);

    print "<br>";

    // s : string 문자열
    // d : decimal 정수
    // %04d : 4자리까지 쓰지만 값이 없을 경우 0으로 대체
    // %4d : 4자리까지 쓰지만 값이 없을 경우 빈칸으로 대체
            // 빈칸 여러칸은 한칸으로 표시됨
    // f : float 소수
    // %.1f : .1은 소수점 첫 번째자리까지 표시

    // printf : 형식화한 문자열을 출력
    // sprintf : 형식화한 문자열을 반환

    $str= sprintf("제 이름은 %s 입니다. 나이는 %4d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다.",
            $name, $age, $height, $blood_type);
    print $str;