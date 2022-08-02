-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.6.7-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- board_login 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `board_login` /*!40100 DEFAULT CHARACTER SET utf8mb3 */;
USE `board_login`;

-- 테이블 board_login.cnt_db 구조 내보내기
CREATE TABLE IF NOT EXISTS `cnt_db` (
  `cnt` int(11) DEFAULT NULL,
  `redate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 board_login.cnt_db:~10 rows (대략적) 내보내기
DELETE FROM `cnt_db`;
/*!40000 ALTER TABLE `cnt_db` DISABLE KEYS */;
INSERT INTO `cnt_db` (`cnt`, `redate`) VALUES
	(119, '2022-05-04'),
	(35, '2022-05-09'),
	(105, '2022-05-10'),
	(13, '2022-05-11'),
	(19, '2022-05-12'),
	(4, '2022-05-13'),
	(7, '2022-05-18'),
	(28, '2022-05-23'),
	(4, '2022-06-20'),
	(21, '2022-07-08');
/*!40000 ALTER TABLE `cnt_db` ENABLE KEYS */;

-- 테이블 board_login.t_board 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_board` (
  `i_board` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `ctnt` varchar(2000) NOT NULL,
  `i_user` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `filename` varchar(255) DEFAULT NULL,
  `view_cnt` int(10) DEFAULT 0,
  PRIMARY KEY (`i_board`),
  KEY `i_user` (`i_user`),
  CONSTRAINT `t_board_ibfk_1` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 board_login.t_board:~140 rows (대략적) 내보내기
DELETE FROM `t_board`;
/*!40000 ALTER TABLE `t_board` DISABLE KEYS */;
INSERT INTO `t_board` (`i_board`, `title`, `ctnt`, `i_user`, `created_at`, `updated_at`, `filename`, `view_cnt`) VALUES
	(1, '호호호', '하하하', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(2, '뉴스입니다.', '뉴스', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(3, '이재명 vs 윤석열', '누가 대권을 잡을 것인가?', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(4, '반가워!!!', '게임 고고', 4, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(5, '속보입니다.', 'ㅎㅎㅎㅎ', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(6, '"33층서 추락하다 29층서 멈춰..눈떠보니 사방이 낭떠러지"', '[파이낸셜뉴스] 지난 11일 광주 서구 화정동의 한 신축 고층 아파트 구조물 붕괴사고 현장에서 극적으로 살아난 부상자가 당시 33층에서 구조물에 휩쓸려 29층까지 4개 층을 한번에 추락했다며 상황을 전했다.', 4, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(7, '격무에 시달리는데도 우릴 ‘잉여 인력’이라고 했다', '“갈래머리 꿈많은 여고생으로 들어와 30여 년 성실히 자신의 몫을 다했음에도 끝내 ‘진부화 인력’이라는 소리를 들어야 하는 한 선배의 눈물겨운 호소에 우리 모두는 눈시울을 붉혔다. 그것이 바로 노동자의 현주소가 아닌가? 한 시간에 최고 275건씩(강원 춘천) 처리해야 하는 최악의 노동강도 속에서도 묵묵히 버티며 일해온 우리는 이러한 부당한 처우에 맞서 개선을 요구하며 오늘부터 본사에서 농성에 들어간다.” -한국통신노동조합 성명서 <농성에 돌입하며> 1995년 5월 9일', 4, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(8, '정치 재개 트럼프, ‘내란선동’으로 기소되나', '도널드 트럼프 전 미국 대통령(사진)이 중간선거를 앞두고 정치 활동을 재개한 가운데 미 연방검찰이 트럼프 전 대통령을 내란선동 혐의로 기소할지가 2024년 대선 변수로 떠오르고 있다. 트럼프 전 대통령이 지난해 1월 6일 대선 불복 집회에서 “죽어라 싸우지 않으면 나라를 잃게 될 것”이라고 발언한 것이 같은 날 벌어진 의회 폭동을 촉발한 것으로 볼 수 있는지가 핵심 쟁점이다.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(9, 'B호텔로 이스보스치카라는 마차를.', 'F역을 떠나 버렸소. R에게는 고맙다는 편지 한 장이 왔다. 그것은 하얼빈에서 부친.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(10, 'C선생을 내가 그이라고 부르는가.', 'F역에서 내려서 썰매 하나를 얻어 타고 산으로 향하였다. 산도 아니지마는 산 있는.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(11, 'J조교수 집으로 전화를 걸었소.', 'C선생이라고 한 것은 물론 내 성 최의 머릿자겠지마는 그의 일기에는 C선생이라는 말과.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(12, 'K장로라는 내 장인에게 청혼을.', 'J박사는, "오케이. 노형의 피가 다행히 누르요. 혈형은 맞는데." 하고 말하기 어려운.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(13, 'F역에 도착하였을 때에는 북만주.', 'Y박사는 이윽히 생각한 끝에, "애기도 인제는 젖떨어질 때도 되었으니 어느 새너토리엄에.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(14, 'J조교수의 말대로 비워 둔 부실의.', 'K여학교의 교사로 있을 때 일입니다. 지금 내 생명이 가진 것은 오직 너뿐이다.\' 이런.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(15, 'Y박사 말이오. 아내는 삼십칠 도.', 'K학교에 넣는다면 우리 순임이는 M학교에 넣을 테요." 하고 내 앞에 놓고는 밖으로.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(16, 'F역에 내리기는 어려울 듯합니다.', 'F역의 R씨를 찾고, 그리고 바이칼 호반의 바이칼리스코에를 찾아, 이 모양으로 나는.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(17, 'Y박사의 진찰을 받았소. Y박사는.', 'J조교수도 만나고 너도 보고 떠나지." 하고 나는 정임의 담요와 세간을 정리하여 들고.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(18, 'J조교수는 내가 속으로 생각한.', 'F역의 R씨를 찾고, 그리고 바이칼 호반의 바이칼리스코에를 찾아, 이 모양으로 부인과.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(19, 'R는 부인의 손을 잡아서 자리에.', 'J박사의 첫 말이었소."죽을까요?" 하고 나는 평생 처음 시 비슷한 것을 지었다. 임과.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(20, 'C선생이라고 한 것은 물론 내 성.', 'C선생이란 것이나 그이란 것이나 아빠란 것이나가 다 나를 버리고, 처자까지도 다 나를.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(21, 'Y박사는 힘을 주어서 말하였소.', 'R는 약간 처참한 빛을 띠면서, "그러니 그 구덩이를 어디 찾을 수가 있나. 얼마를.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(22, 'R가 말을 끊소. 나는 R부처가.', 'F역의 R씨를 찾고, 그리고 바이칼 호반의 그 집에 와서 홀로 누웠습니다. 순임은 주인.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(23, 'B호텔로 이스보스치카라는 마차를.', 'R는 부인이 벌떡 일어나서 비틀거리고 달아나는 흉내를 팔과 다리로 내고 나서, "이래서.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(24, 'R는 약간 처참한 빛을 띠면서.', 'K학교에 순임을 M학교에 넣었던 것이오. "그럼 어떡할까? 순임도 K학교에 넣어 볼까.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(25, 'J조교수는 간호부에게 수혈 준비를.', 'Overcome." 하고 영어로 쓴 것도 있었다. 그리고 마지막에, "나는 죽음과.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 3),
	(26, 'Y박사 말이오. 아내는 삼십칠 도.', 'R는 고개를 숙이고 있다가도 가끔 고개를 들어서는 기운 나는 양을 보이려고, 유쾌한.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(27, 'J조교수가 댄스를 할 때에는 나는.', 'F역에서도 썰매로 더 가는 삼림 속에 단둘이 살게 하고 싶었다. 그러나 최석은.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(28, 'Y박사는, "감기가 기관지염이.', 'K학교에 입학했다가 왜 M학교로 옮겨 왔어요?" 하고 묻는 이가 있으면 내 아내는 마치.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(29, 'J조교수는 무시로 정임의 병실에.', 'J전문 학교의 교수로부터 온 사람이 아니었소? 형도 다 아시는 바이어니와 이 사람은.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(30, 'K교무주임의 음모에서 나온 것임을.', 'V라는 대삼림 지대가 어디인 줄도 알고 거기를 가려면 어느 정거장에서 내릴 것도 다.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(31, 'Y박사의 말에 아내의 낯빛은 아주.', 'R는 부인의 말에 웃고 나서, "그 자리에 묻어 달란 말을 들으니까, 어떻게 측은한지.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(32, 'R는 부인이 벌떡 일어나서 정임의.', 'J조교수는 전화 앞으로 가오.J조교수는 먼저 정임의 귀의 피를 뽑아 정임의 왼편 팔의.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(33, 'R의 집 앞을 지날 때에도 R의.', 'R는 웃지도 아니하오. 그의 얼굴에는, 군인다운 기운찬 얼굴에는 증오와 분노의 빛이.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(34, 'J조교수 집으로 전화를 걸었소.', 'J조교수를 찾아서 정임의 병세도 물어 보았소. J조교수는 처음에 까다로운 사람 같더니.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(35, 'F역에 도착하였을 때에는 북만주.', 'J박사는 내가 허둥지둥하는 태도가 우스운 듯이 빙그레 웃으며,"피는 사려면 얼마든지.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(36, 'F역에 도착하였을 때에는 북만주.', 'Y박사가 대문 밖에 나서면서 나더러, "상당히 중하시오." 하고 자기의 오른편 가슴을.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(37, 'K간호부는 내 귀에 입을 대고.', 'S박사를 만나려 하였으나 박사는 진찰 중이라 하기로 겨우 J라는 조교수 하나를 붙들고.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(38, 'R는 먹던 담배를 화나는 듯이.', 'Overcome." 하고 영어로 쓴 것도 아닌데 그 편지를 훔쳐다가 얼른얼른 몇 군데.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(39, 'J조교수는 농담 절반으로 내게.', 'R의 추연한 태도를 아마 고국을 그리워하는 것으로만 여겼소. 그래서 나는 마음 큰.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(40, 'J조교수는 내가 속으로 생각한.', 'C선생을 내가 그이라고 부르는가. 내가 죄다! 죄다! 다시는 C선생을 그이라고 아니.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(41, 'R소장을 만나뵈옵고 아버지 일을.', 'K교무주임을 불러서, "심히 무책임한 일 같소이다마는 나는 부득이한 사정으로 사직하니.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(42, 'J박사도,"라셀도 훨씬 줄었고.', 'R를 모르는지 무엇이라고 아라사말로 지껄이는 모양이나 나는 물론 그것을 알아들을 수가.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(43, 'R는 부인이 벌떡 일어나서 어둠.', 'Y박사 말이오. 아내는 삼십칠 도 오 분이나 되는 신열을 가지고도 몸소 만찬을.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(44, 'F역에 내리기는 어려울 듯합니다.', 'J박사는, "오케이. 노형의 피가 다행히 누르요. 혈형은 맞는데." 하고 말하기 어려운.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 2),
	(45, 'B호텔로 이스보스치카라는 마차를.', 'K학교에 입학했다가 왜 M학교로 옮겨 올까." 하고 나는 겨우 정임을 끌고 들어왔다.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(46, 'R는 그 아내를 보오. "그럼.', 'J전문 학교의 교수로부터 온 사람이 아니었소? 형도 다 아시는 바이어니와 이 사람은 나.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(47, 'K간호부는 내 귀에 입을 대고.', 'R의 얼굴은 이상한 흥분으로 더욱 붉어지오.유 정유 정 R는 먹던 담배를 화나는 듯이.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(48, 'F역에서 내려서 썰매 하나를 얻어.', 'Overcome." 하고 영어로 쓴 것도 있소.정임의 일기에는 어디나 그 적막하고.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(49, 'K학교에 가. M학교는 싫어!".', 'S형무소에 입감해 있을 적에 형무소 벽에 죄수가 손톱으로 성명을 새긴 것을 보았소.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(50, 'K라는 전속 간호부에게로 가서.', 'R의 심사가 난측하고 원망스러웠소. "고국이 그립지가 않아?" 하고 R에게 묻는 내.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(51, 'R의 말이 과격함에 놀랐지마는.', 'R는 다시 이야기를 계속하오. "순식간에 둘이 드러누울 만한 구덩이를 아마 두 자.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 2),
	(52, 'J조교수를 찾아서 정임의 병세도.', 'J박사는, "오케이. 노형의 피가 다행히 누르요. 혈형은 맞는데." 하고 말하기 어려운.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(53, 'J조교수는 내가 속으로 생각한.', 'K학교에 가. M학교는 싫어!" 하고 떼를 쓰오. "이년. 네까짓 년이 학교가 무슨.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(54, 'R와 R의 가족이 나와서 꽃과.', 'K학교에 가. M학교는 싫어!" 하고 떼를 쓰오. "이년. 네까짓 년이 학교가 무슨.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(55, 'R와 R의 가족이 나와서 꽃과.', 'R를 더 보기를 원치 아니하였소. 그것은 반드시 R를 죄인으로 보아서 그런 것은.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(56, 'R는 긴장한 표정을 약간 풀고.', 'R와 R의 가족이 나와서 꽃과 과일과 여러 가지 교섭이 있은 후에 겨우 일등실 하나를.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(57, 'J박사도,"라셀도 훨씬 줄었고.', 'K여학교의 교사로 있을 때 일입니다. 지금 내 머리 속은 용솟음쳐서 끓어오르고 있소.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(58, 'M학교로 옮겨 올까." 하고 나는.', 'Y박사가 돌아간 뒤에 나는 정임의 해쓱한 얼굴과 가늘어진 목을 들여다보았소. 그리고.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(59, 'K라는 전속 간호부에게로 가서.', 'R는 다시 이야기를 계속하오. "순식간에 둘이 드러누울 만한 구덩이를 아마 두 자.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(60, 'J조교수는 농담 절반으로 내게.', 'Y박사 말이오. 아내는 삼십칠 도 오 분이나 되는 신열을 가지고도 몸소 만찬을.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(61, 'R라는 사람으로서 경술년에 A씨.', 'A씨의 이야기도 나오고, A씨의 이야기도 나오고, 우리네가 어려서 서로 사귀던 회구담도.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 14),
	(62, 'F역을 떠나 버렸소. R에게는.', 'T대학 병원에 입원을 시켰습니다." 각혈이라니! 우리 정임이가 각혈이라니! 하고 나는.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(63, 'J박사는 내가 허둥지둥하는 태도가.', 'K교무주임을 불러서, "심히 무책임한 일 같소이다마는 나는 부득이한 사정으로 사직하니.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(64, 'K를 힐끗 보았소. 그는 전 교장.', 'K를 힐끗 보았소. 그는 전 교장 S라는 서양인이 늙어서 그만두고 귀국할 때에 나와.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(65, 'K간호부를 한 번 만져 주었소.', 'J박사는, "오케이. 노형의 피가 다행히 누르요. 혈형은 맞는데." 하고 말하기 어려운.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(66, 'J조교수는 간호부에게 수혈 준비를.', 'N형! 나는 바이칼 호의 가을 물결을 바라보면서 이 글을 쓰오. 나의 고국 조선은.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(67, 'C선생은 몇 살이 되시나. 지난.', 'K간호부를 한 번 더 희를 꽉 껴안아 보고는 방바닥에 떼어 놓으려 하였소. 희는.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(68, 'R는 인제는 하하하 하는 웃음조차.', 'K도 나와 같이 교회의 직분을 띤 사람이 아니오? 나는 교장실로 들어가기 전에 교무주임.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(69, 'Y박사는 해쓱한 내 아내를 원망치.', 'K학교에 넣는다면 우리 순임이는 M학교에 넣을 테요." 하고 내 아내는 조롱하는.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(70, 'J조교수의 말대로 비워 둔 부실의.', 'F역에 도착하였을 때에는 북만주 광야의 석양의 아름다움은 그 극도에 달한 것 같았소.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(71, 'K학교에 넣는다면 우리 순임이는.', 'Y박사는 힘을 주어서 내 혼란한 감정을 눌러 버렸소. 내가 왜 이랬나 나는 지금도.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(72, 'R가 말을 끊소. 나는 R부처가.', 'J조교수는 전화 앞으로 가오.J조교수는 먼저 정임의 귀의 피를 뽑아 정임의 왼편 팔의.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(73, 'R가 돌아간 뒤에 나는 최석이가.', 'R는 긴장한 표정을 약간 풀고 앉은 자세를 잠깐 고치며, "그 후에 그 날 저녁에 내.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(74, 'Y박사는, "감기가 기관지염이.', 'C선생님의 사랑의 품에서 살았다. 나는, 나는 이 생각을 이길 수가 없는 것 같다.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(75, 'R를 더 보기를 원치 아니하였소.', 'F역에 도착하였을 때에는 북만주 광야의 석양의 아름다움은 그 극도에 달한 것 같았소.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(76, 'J조교수가 댄스를 할 때에는 나는.', 'B호텔에서 미스 초이(최 양)를 찾았으나 순임은 없고 어떤 서양 노파가 나와서, "유.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(77, 'F역이라는 것은 삼림 속에 단둘이.', 'R가 돌아간 뒤에 내 아내는 둘째 살촉을 내 심장을 향하고 들이쏘았소. "그럼 어떡하면.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(78, 'K간호부는 잠이 들어서 쿨쿨 오륙.', 'Y박사가 대문 밖에 나서면서 나더러, "상당히 중하시오." 하고 자기의 오른편 가슴을.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(79, 'J조교수를 찾아서 정임의 병세도.', 'X호실을 찾았소. X호실이라는 것은 결핵 병실인 것을 발견하였소. 이렇게 오진되고 약을.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 2),
	(80, 'R의 집의 손이 되어서 R부처의.', 'R를 더 보기를 원치 아니하였소. 그것은 반드시 R를 죄인으로 보아서 그런 것은.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(81, 'S박사를 만나려 하였으나 박사는.', 'J조교수는 무시로 정임의 병실에 나를 찾아왔소. 이것은 간호부들의 눈에 정임과 나와의.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(82, 'C선생이라고 한 것은 물론 내 성.', 'R는 부인의 손을 잡아서 자리에 앉히오. 부인도 웃으면서 앉소. "최 선생 처지가 꼭.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(83, 'F역에서 내려서 썰매 하나를 얻어.', 'C선생님께 조용히 말씀할 기회나 얻을까. 몸이 불편하다. 병이 나려나." 이 밖에도.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(84, 'C선생님의 사랑의 품에서 살았다.', 'R는 부인의 손을 잡아서 자리에 앉히오. 부인도 웃으면서 앉소. "최 선생 처지가 꼭.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(85, 'F역이라는 것은 삼림 속에 있는.', 'J조교수는 처음에 까다로운 사람 같더니 차차 사귀어서 나중에는 저녁을 같이 먹으러.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(86, 'R는 부인의 손을 잡아서 자리에.', 'J조교수 집으로 전화를 걸었소. 아직오전 여섯 시, 이 때는 밤에 늦도록 댄스요.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(87, 'K장로라는 내 장인에게 청혼을.', 'C선생님의 사랑의 품에서 살았다. 나는, 나는 이 앞에 몇십 년을 더 살더라도 내 이.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(88, 'R는 부인이 벌떡 일어나서 어둠.', 'Y박사의 진찰을 받았소. Y박사는 벌써 이 준비로 청진기와 검온기 등속을 가방에 넣어.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(89, 'B호텔이라 함은 이르쿠츠크인 것이.', 'K간호부는 내 귀에 들리고 그 후끈후끈하는 뜨거운 입김이 내 목과 뺨에 감각되었소.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(90, 'K학교에 가. M학교는 싫어!".', 'J조교수 집으로 전화를 걸었소. 아직오전 여섯 시, 이 때는 밤에 늦도록 댄스요.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(91, 'C선생께 내 속을 말하는 편지를.', 'R의 심사가 난측하고 원망스러웠소. "고국이 그립지가 않아?" 하고 R에게 묻는 내.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(92, 'K간호부는 내 귀에 입을 대고.', 'Y박사는 이윽히 생각한 끝에, "애기도 인제는 젖떨어질 때도 되었으니 어느 새너토리엄에.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(93, 'J조교수는 무시로 정임의 병실에.', 'R는 내 방에 올라와서 내일 하루 지날 일도 이야기하고 또 남 선생과 정임에게 관한.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 6),
	(94, 'R는 고개를 숙이고 서 있던 내.', 'F역에서도 썰매로 더 가는 삼림 속에 있는 조그마한 정거장으로 집이라고는 정거장 집밖에.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(95, 'K학교에 가. M학교는 싫어!".', 'J조교수를 찾아서 정임의 병세도 물어 보았소. 그러나 나는 순임의 손이 닿지 않도록.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(96, 'F역에서도 썰매로 더 가는 삼림.', 'R와 그 여학생과 두 사람이 금시에 조선에 나타난다고 하면 그들은 태도를 돌변하여.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(97, 'C선생이란 것이나 그이란 것이나.', 'F역에 도착하였을 때에는 북만주 광야의 석양의 아름다움은 그 극도에 달한 것 같았소.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(98, 'C선생님께 조용히 말씀할 기회나.', 'K학교에 넣는다면 우리 순임이는 M학교에 넣을 테요." 하고 내 아내는 한 번.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(99, 'R의 집의 손이 되어서 R부처의.', 'R는 약간 처참한 빛을 띠면서, "그러니 그 구덩이를 어디 찾을 수가 있나. 괴로울수록.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(100, 'K간호부를 한 번 날뛰어 보려는.', 'C선생이라고 한 것은 물론 내 성 최의 머릿자겠지마는 그의 일기에는 C선생이라는 말과.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(101, 'K학교에 가. M학교는 싫어!".', 'R의 심사가 난측하고 원망스러웠소. "고국이 그립지가 않아?" 하고 R에게 묻는 내.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(102, 'Y박사의 말에 아내의 낯빛은 아주.', 'K교무주임을 불러서, "심히 무책임한 일 같소이다마는 나는 부득이한 사정으로 사직하니.', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(103, 'R는 부인이 벌떡 일어나서 도어의.', 'R씨라고 간도 개척자요, 간도에 조선인 문화를 세운 이로 유명한 이의 아들인 것이.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(104, 'R의 얼굴은 이상한 흥분으로 더욱.', 'R를 모르는지 무엇이라고 아라사말로 지껄이는 모양이나 나는 물론 그것을 알아들을 수가.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(105, 'C선생은 몇 살이 되시나. 지난.', 'R는 내 방에 올라와서 내일 하루 지날 일도 이야기하고 또 남 선생과 정임에게 관한.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(106, 'K씨, 지금은 교장이 나를 그렇게.', 'S형무소에 입감해 있을 적에 형무소 벽에 죄수가 손톱으로 성명을 새긴 것을 보았소.', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(107, 'R와 그 여학생과 두 사람이 다.', 'F역에 도착하였을 때에는 북만주 광야의 석양의 아름다움은 그 극도에 달한 것 같았소.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(108, 'R를 괘씸하게 생각하기 전에 내가.', 'R는 식은 차를 한 모금 마시고 나서 말을 계속하오. "그래서 나는 내 진단이.', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(109, '반가워', '하하하하aasdfasfd', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(110, '아아앙', '허허허허', 1, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(111, '세번째', '후이이이', 3, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 1),
	(112, 'ㅇㄴㅁㄹ', 'ㅇㅇ', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 7),
	(113, 'asdf', '33', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(114, 'asdfsaf', '1232', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 0),
	(115, '마지막', 'ㅎ루후후후', 2, '2022-04-27 15:54:36', '2022-04-27 15:54:36', '', 7),
	(116, '안녕하세요', '안녕히가세요', 1, '2022-05-02 10:54:28', '2022-05-02 10:54:28', '', 3),
	(117, 'ㅇㄹㄴㅇㄹ', 'ㅇㄴㄹㄴㅇㄹㄴㅇㄹ', 1, '2022-05-02 11:02:41', '2022-05-02 11:02:41', '', 2),
	(118, 'ㅇㄴㄹㅇㄴ', 'ㅎㄴㅇㅎㅇㄶ', 1, '2022-05-02 11:11:22', '2022-05-02 11:11:22', '', 1),
	(119, 'sdgsdgds', 'sdgsdg', 1, '2022-05-02 11:28:03', '2022-05-02 11:28:03', '24283C3858F778CA2E.jpg', 1),
	(121, 'dsfd', 'dfsdfdsf', 1, '2022-05-02 16:02:33', '2022-05-02 16:12:18', '아저씨.jpg', 1),
	(122, 'sdfsdg', 'sdgfgsg', 1, '2022-05-02 16:03:31', '2022-05-02 16:03:31', '아저씨.jpg', 63),
	(123, 'ㅇㄹㄶ', 'ㅇㄴㄹㄴㅇㄹㅇㄴ', 1, '2022-05-02 16:16:09', '2022-05-02 16:20:44', '', 11),
	(124, 'ㅗㅇ곧ㄱ', 'ㄴㄱㅎㄴㅇㅎ', 1, '2022-05-02 16:21:43', '2022-05-02 16:21:43', '24283C3858F778CA2E.jpg', 10),
	(125, 'ㄹㅇㅎㄹㅇㄴ', 'ㅗㅁㄹㅇㅎㅁㄹㅇㅎ', 1, '2022-05-02 16:29:34', '2022-05-02 16:45:57', '24283C3858F778CA2E.jpg', 10),
	(126, 'ㅀ', 'ㅎㄴㅇㅎ', 1, '2022-05-02 16:36:38', '2022-05-02 16:36:38', '24283C3858F778CA2E.jpg', 8),
	(127, 'ㅀ', 'ㅎㄴㅇㅎ', 1, '2022-05-02 16:36:39', '2022-05-02 16:43:39', '24283C3858F778CA2E.jpg', 23),
	(128, 'ㅗㅎㄹㅇ', 'ㅇ오롤오', 1, '2022-05-02 16:41:50', '2022-05-02 16:45:13', '24283C3858F778CA2E.jpg', 49),
	(129, '옹로', 'ㄴㅀㄴㅇㅀㄶ', 1, '2022-05-03 17:45:16', '2022-05-03 17:45:16', '24283C3858F778CA2E.jpg', 73),
	(130, '갹', '랄', 2, '2022-05-04 11:45:39', '2022-05-04 11:45:39', '', 44),
	(131, 'dfdf', 'dfdfdf', 1, '2022-05-04 17:40:15', '2022-05-04 17:40:15', '', 5),
	(132, 'sfsd', 'fdfsfdsf', 1, '2022-05-04 17:49:13', '2022-05-04 17:49:13', '', 9),
	(134, '프로필 사진 확인용', '확인용입니다.', 4, '2022-05-10 12:09:48', '2022-05-10 12:09:48', '', 63),
	(135, 'fdlfjkdxslfjksdf', '지난 2년의 시간 동안 우리는 눈에 보이지 않는 바이러스가 주는 공포로 인해 생존의 위협을 느끼며 일상이 흔들리는 상황을 직면하였다. 이런 환경 속에서 많은 질문을 하게 된다. “우리는 다시 이전의 삶으로 돌아갈 수 있을까? 우리는 앞으로 어떤 삶을 마주하게 될까?”와 같은 것들이다. 코로나19로 우리의 일상에도 급격한 변화가 있었다. 그중 불가피한 사회적 거리 두기는 개개인의 사회 활동을 줄어들게 만들었고 고립감을 야기하기도 했지만, 반면 타인과의 관계에서 돌보지 못했던 자신의 내면을 들여다보고, 타인을 또 다른 거리에서 관찰할 수 있는 시간을 갖게 하였다.\r\n<br><br>\r\n 《나를 만나는 계절》은 유한한 생명의 자연인이지만, 반면에 무한한 생각을 펼치기도 하는 인간에 대한 고찰을 담은 전시이다. 전시는 4개의 주제, ‘생명을 지니다’, ‘일상을 관찰하다’, ‘나를 바라보다’, ‘세상에게 묻다’로 구성된다. 전시의 전개를 생명에서 출발하여 나와 타인, 더 나아가 관계로 이어지는 인간의 삶을 봄, 여름, 가을, 겨울의 사계절에 비유하여 살펴보고자 한다. 생명의 시작을 알리는 봄, 활기찬 일상을 향유하는 여름, 사유의 시간을 갖게 하는 가을과 긴 밤의 침잠에 들게 하는 겨울과 같이 자연의 순환인 계절의 흐름처럼 한 번쯤은 고민해봤을 나와 우리의 삶에 대해 생각해보는 시간을 가지고자 한다. \r\n\r\n', 1, '2022-05-12 13:17:09', '2022-05-12 14:14:03', '', 8),
	(136, 'dkdkdkdk', 'dkfjdkfjkdkdsfk\r\n<br><br>\r\ndkfjkdfjslfjdkl', 1, '2022-05-12 14:14:36', '2022-05-12 14:14:36', '', 9),
	(137, 'ㄹㄴㅇㄹㄴㅇㅎ', 'ㄴㅇㄹㄴㅇㄹㅇㄶ\r\n<br>\r\nfkjdkfjdkfj\r\n<br><br>\r\ndfjdkfjkdjfsljflkds', 1, '2022-05-12 14:17:34', '2022-05-12 14:17:50', '', 4),
	(138, 'ㅇㅇ', 'kldsfjljdsklfjds<br />\r\nfkdsjflk<br />\r\n<br />\r\ndskfjsdklfjsdlkf<br />\r\n<br />\r\n<br />\r\ndsfkjsdlfjsdlkf<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nsdfjksdjflskdfjklsdjfklsdjfkl', 1, '2022-05-12 14:21:07', '2022-05-12 14:21:07', '', 6),
	(139, 'ㅇㄹㅇㄹㅇ', '지난 2년의 시간 동안 우리는 눈에 보이지 않는 바이러스가 주는 공포로 인해 생존의 위협을 느끼며 일상이 흔들리는 상황을 직면하였다. 이런 환경 속에서 많은 질문을 하게 된다. “우리는 다시 이전의 삶으로 돌아갈 수 있을까? 우리는 앞으로 어떤 삶을 마주하게 될까?”와 같은 것들이다. 코로나19로 우리의 일상에도 급격한 변화가 있었다. 그중 불가피한 사회적 거리 두기는 개개인의 사회 활동을 줄어들게 만들었고 고립감을 야기하기도 했지만, 반면 타인과의 관계에서 돌보지 못했던 자신의 내면을 들여다보고, 타인을 또 다른 거리에서 관찰할 수 있는 시간을 갖게 하였다.<br />\r\n 《나를 만나는 계절》은 유한한 생명의 자연인이지만, 반면에 무한한 생각을 펼치기도 하는 인간에 대한 고찰을 담은 전시이다. 전시는 4개의 주제, ‘생명을 지니다’, ‘일상을 관찰하다’, ‘나를 바라보다’, ‘세상에게 묻다’로 구성된다. 전시의 전개를 생명에서 출발하여 나와 타인, 더 나아가 관계로 이어지는 인간의 삶을 봄, 여름, 가을, 겨울의 사계절에 비유하여 살펴보고자 한다. 생명의 시작을 알리는 봄, 활기찬 일상을 향유하는 여름, 사유의 시간을 갖게 하는 가을과 긴 밤의 침잠에 들게 하는 겨울과 같이 자연의 순환인 계절의 흐름처럼 한 번쯤은 고민해봤을 나와 우리의 삶에 대해 생각해보는 시간을 가지고자 한다. <br />\r\n', 1, '2022-05-12 14:21:31', '2022-05-12 14:21:31', '', 12),
	(141, '다시다시수정', '안녕하세요<br />\r\n<br />\r\n<br />\r\n안녕히가세요....<br />\r\n아러ㅏ어라<br />\r\n<br />\r\nㅏㅇ러ㅏㅇ러ㅏ러ㅏㅓㅏ\r\n<br />\r\n하이', 3, '2022-05-13 15:10:15', '2022-05-13 15:10:15', '', 21),
	(144, 'dfsf', 'sgesgsefsefse', 12, '2022-07-08 10:01:44', '2022-07-08 10:01:44', 'KakaoTalk_20220705_165549927.jpg', 5),
	(145, 'sfe', 'sfeefe', 1, '2022-07-11 17:51:53', '2022-07-11 17:51:53', 'KakaoTalk_20220705_165512294.jpg', 6);
/*!40000 ALTER TABLE `t_board` ENABLE KEYS */;

-- 테이블 board_login.t_reply 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_reply` (
  `i_re` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `i_board` int(10) unsigned NOT NULL,
  `i_user` int(10) unsigned NOT NULL,
  `ctnt` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `rv` int(10) DEFAULT NULL,
  PRIMARY KEY (`i_re`),
  KEY `i_board` (`i_board`) USING BTREE,
  KEY `i_user` (`i_user`) USING BTREE,
  CONSTRAINT `FK_t_reply_t_board` FOREIGN KEY (`i_board`) REFERENCES `t_board` (`i_board`),
  CONSTRAINT `FK_t_reply_t_user` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 board_login.t_reply:~5 rows (대략적) 내보내기
DELETE FROM `t_reply`;
/*!40000 ALTER TABLE `t_reply` DISABLE KEYS */;
INSERT INTO `t_reply` (`i_re`, `i_board`, `i_user`, `ctnt`, `created_at`, `updated_at`, `rv`) VALUES
	(40, 129, 1, '사사사ㅏ', '2022-06-23 11:28:54', '2022-06-23 11:28:54', 3),
	(42, 129, 1, 'ㄹㄴㄷㄹㅈㄷ', '2022-06-23 11:49:05', '2022-06-23 11:49:05', NULL),
	(43, 141, 2, 'ㅇㄹㄴㄹ', '2022-06-23 12:30:38', '2022-06-23 12:30:38', NULL),
	(45, 141, 12, '안녕? 내가 누군지 아니?', '2022-07-08 10:02:11', '2022-07-08 10:02:11', 5),
	(49, 141, 1, '댓글 추가', '2022-07-15 10:46:42', '2022-07-15 10:46:42', 5);
/*!40000 ALTER TABLE `t_reply` ENABLE KEYS */;

-- 테이블 board_login.t_user 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_user` (
  `i_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `upw` varchar(70) NOT NULL,
  `nm` varchar(10) NOT NULL,
  `gender` int(10) unsigned NOT NULL CHECK (`gender` in (0,1)),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `profile_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`i_user`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 board_login.t_user:~8 rows (대략적) 내보내기
DELETE FROM `t_user`;
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`i_user`, `uid`, `upw`, `nm`, `gender`, `created_at`, `updated_at`, `profile_img`) VALUES
	(1, 'test1', '$2y$10$xRWey6Ily8F/hV0FpskL9e.SE6e.XSPEInEMe/F5GJEpyfBqXRHq6', '김가나', 0, '2022-04-22 17:46:09', '2022-04-22 17:46:09', '125a202a-7097-414b-93ff-33cd1930a5e1.jpg'),
	(2, 'test2', '$2y$10$xRWey6Ily8F/hV0FpskL9e.SE6e.XSPEInEMe/F5GJEpyfBqXRHq6', '홍길동', 1, '2022-04-22 17:47:09', '2022-04-22 17:47:09', ''),
	(3, 'test3', '$2y$10$xRWey6Ily8F/hV0FpskL9e.SE6e.XSPEInEMe/F5GJEpyfBqXRHq6', '이라마', 1, '2022-04-27 09:46:45', '2022-04-27 09:46:45', ''),
	(4, 'test4', '$2y$10$xRWey6Ily8F/hV0FpskL9e.SE6e.XSPEInEMe/F5GJEpyfBqXRHq6', '박사라', 0, '2022-04-27 15:55:44', '2022-04-27 15:55:44', NULL),
	(7, 'test5', '$2y$10$TVTlaAD7gowDhf9cr/1cfOcIf8kkmPf8hJBGLMGWKT41tuWW2IP16', '강다바', 1, '2022-06-22 12:35:55', '2022-06-22 12:35:55', NULL),
	(11, 'test6', '$2y$10$xRWey6Ily8F/hV0FpskL9e.SE6e.XSPEInEMe/F5GJEpyfBqXRHq6', '최바하', 0, '2022-06-22 14:49:13', '2022-06-22 14:49:13', '041574e6-0675-4460-a56d-764a44ba64d4.jpg'),
	(12, 'test10', '1234', '아아', 0, '2022-07-08 10:00:53', '2022-07-08 10:00:53', ''),
	(13, 'test11', '$2y$10$bUn0H2VuVZvMtgiDMdd1yeXJ0jUQIs4h8v3LHCa6Zk7VwR5zDKvoi', '꺄르를', 1, '2022-07-11 17:46:13', '2022-07-11 17:46:13', NULL);
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
