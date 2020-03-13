INSERT INTO Type(`TypeName`) VALUES
('อาคารถาวร'),
('อาคารชั่วคราว/โรงเรือน'),
('สิ่งก่อสร้าง'),
('ครุภัณฑ์สำนักงาน'),
('ครุภัณฑ์ยานพาหนะและขนส่ง'),
('ครุภัณฑ์ไฟฟ้าและวิทยุ'),
('ครุภัณฑ์โฆษณาและเผยแพร่'),
('ครุภัณฑ์การเกษตร'),
('ครุภัณฑ์โรงงาน'),
('ครุภัณฑ์ก่อสร้าง'),
('ครุภัณฑ์สำรวจ'),
('ครุภัณฑ์วิทยาศาสตร์การแพทย์'),
('ครุภัณฑ์คอมพิวเตอร์'),
('ครุภัณฑ์การศึกษา'),
('ครุภัณฑ์งานบ้านงานครัว'),
('ครุภัณฑ์กีฬา'),
('ครุภัณฑ์ดนตรีและนาฏศิลป์'),
('ครุภัณฑ์อาวุธ'),
('ครุภัณฑ์สนาม');


INSERT INTO Status(`StatusName`) VALUES
('ปกติ'),
('ไม่ว่าง'),
('สิ่งก่อสร้าง'),
('ปลดระวาง');



INSERT INTO Item(`TypeID`, `ItemID`, `ItemName`, `Detail`, `Price`, `Building`, `Add_Date`, `Edit_Date`, `TeacherRight`, `StaffRight`,  `StudentRight`,`Statusref`) VALUES
(13,'5602130000087', 'ชุดคอมพิวเตอร์ประมวลผลระดับสูง 1 ชุด', 'DellOptiplex 7010DT', '749000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5602130000116', 'ชุดคอมพิวเตอร์สำหรับโครงงานนักศึกษา 1 ชุด', 'DellOptiplex 7010DT', '499500', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1),
(13,'5602130000207', 'ระบบเชื่อมสัญญาณเครือข่าย(Switching) 1 ชุด', 'Cisco', '599200', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(04,'5602040000007', 'เครื่องทำลายเอกสาร', 'IDEAL 3104', '53500', '6301', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5602130000049', 'โปรแกรมวิเคราะห์ข้อมูลสารสนเทศภูมิศาสตร์เชิงพื้นที่', 'ESRI ArcGIS', '219992', 'GIS', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5602130000225', 'คอมพิวเตอร์สมรรถนะสูงสำหรับงานวิจัยด้าน IT', null, '1200000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000036', 'เครื่องคอมพิวเตอ์แบบพกพา', null, '799600', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000083', 'ชุดอุปกรณ์สำหรับทำงานด้านวิจัยในวิชาโครงงานนักศึกษา', null, '260000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000057', 'ระบบคอมพิวเตอร์', null, '1965000', '6324', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000060', 'ระบบเครือข่ายคอมพิวเตอร์', null, '993000', '6324', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000086', 'คอมพิวเตอร์ลูกข่ายประสิทธิภาพสูงสำหรับการเรียนการสอนในห้องปฏิบัติการ', null, '2494000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000238', 'โปรแกรมประมวลผลภาพทาง GIS', null, '648313', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1),
(13,'5702130000239', 'โปรแกรมประมวลผลภาพระดับสูง', 'eCognition Developer V.8', '245000', '6707', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000240', 'โปรแกรมประมวลผลข้อมูลการสำรวจระยะไกล', null, '360900', '6707', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000436', 'คอมพิวเตอร์สมรรถนะสูงสำหรับงานวิจัยด้าน IT', null, '549000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000397', 'ระบบเครือข่ายคอมพิวเตอร์', null, '499000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5702130000399', 'ชุดอุปกรณ์สำหรับทำงานด้านวิจัยในวิชาโครงงานนักศึกษา', null, '899000', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1),
(07,'5602070000048', 'ชุดนำเสนอผลงาน', null, '299900', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1),
(13,'5802130000006', 'เครื่องคอมพิวเตอร์แม่ข่าย', null, '88810', '6324', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5802130000015', 'ระบบคอมพิวเตอร์', null, '147500', '6324', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'ไม่อนุญาต',1),
(13,'5802130000025', 'ชุดนำเสนอผลงาน', null, '399800', null, '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1),
(13,'5802130000041', 'อุปกรณ์สำรองข้อมูล', null, '520000', '6324', '2020-03-12', now(), 'อนุญาต', 'อนุญาต', 'อนุญาต',1);


INSERT INTO Useraccount(`userID`, `firstName`, `lastName`, `userName`, `passWord`, `mail`, `tel`, `role`) VALUES
('6030204977', 'Jatupon', 'Donkoon', 'inwwei007DFG', '6030204977', 'jatupon@kkumail.com', '091-23456789', 'student'),
('6030210300', 'Atikhun', 'Wongmalasith', 'chin-3311', '6030210300', 'Atikhun.w@kkumail.com', '095-9876541', 'teacher'),
('Admin', 'Atikhun', 'Wongmalasith', 'Admin', 'Admin', 'Admin', '1-2314567890', 'admin');


INSERT INTO BorrowTransection (`itemID`, `userID`, `Statusref`, `statuswork`, `Start_Date`, `End_Date`) VALUES
(1, 1, '1', 'ปกติ', '2020-03-12 00:00:00', '2020-03-15 00:00:00'),
(2, 2, '2', 'ปฏิเสธ', '2020-03-12 00:00:00', '2020-03-15 00:00:00'),
(3, 2, '3', 'เลท', '2020-03-12 00:00:00', '2020-03-15 00:00:00'),
(4, 1, '4', 'เกินกำหนด', '2020-03-12 00:00:00', '2020-03-15 00:00:00');
