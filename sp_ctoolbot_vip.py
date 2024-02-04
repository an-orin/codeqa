import telebot
import datetime
import time
import os,sys,re
import subprocess
import requests
from telegram import Bot
import datetime
import random
from pytube import YouTube
from keep_alive import keep_alive
keep_alive()
os.system('clear')
print('BOT ONLINE BY AN ORIN & VIP !')
bot_token = '6075354022:AAFo7hfjjb7KEYhGO6ovtwD2TuQ0nzB6sF4' 
bot = telebot.TeleBot(bot_token)
processes = []
ADMIN_ID = '5350713349'
namebot = "@sp_ctoolbot"
ten_admin = "An Orin"
full_ten_admin = "Vũ Xuân An"

cookie = "datr=nSB_ZL1h13iUMgL7OIPZUYfj;sb=nSB_ZLKFHfHQpf-4QbdBTr-Z;vpd=v1%3B698x360x2;wl_cbv=v2%3Bclient_version%3A2394%3Btimestamp%3A1705641935;c_user=100093226561215;m_page_voice=100093226561215;ps_n=0;ps_l=0;xs=18%3ALxXroi-LTk04Vg%3A2%3A1705891452%3A-1%3A6284%3A%3AAcUlMHVlaAqzzse4O3eHiHcbLptE1U1wwACWEEwAKA;fr=1AiXiPtVSxp1UxxXB.AWWbjipxBtMMMWUlKqEkW7N9A6s.BluMgj.IU.AAA.0.0.BluMgj.AWU2I-wnxsU;presence=EDvF3EtimeF1706608691EuserFA21B93226561215A2EstateFDutF0CEchF_7bCC;dpr=2.1988937854766846;usida=eyJ2ZXIiOjEsImlkIjoiQXM4MmpwNzF0ZDdmNmIiLCJ0aW1lIjoxNzA2NjA4Njk5fQ%3D%3D;wd=891x1728;"


def TimeStamp():
    now = str(datetime.date.today())
    return now

#Lệnh Superspam
@bot.message_handler(commands=['superspam'])
def spam(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP SỐ ĐIỆN THOẠI ')
        return
    if len(message.text.split()) == 2:
        bot.reply_to(message, 'Thiếu dữ kiện !!!')
        return
    lap = message.text.split()[2]
    if lap.isnumeric():
      if not (int(lap) > 0 and int(lap) <= 40):
        bot.reply_to(message,"Vui lòng spam trong khoảng 1-40. Nếu nhiều hơn mua vip để sài :))")
        return
    else:
      bot.reply_to(message,"Sai dữ kiện !!!")
      return
    phone_number = message.text.split()[1]
    if not re.search("^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$",phone_number):
        bot.reply_to(message, 'SỐ ĐIỆN THOẠI KHÔNG HỢP LỆ !')
        return

    if phone_number in ["0777374145"]:
        # Số điện thoại nằm trong danh sách cấm
        bot.reply_to(message,"Spam cái đầu buồi tao huhu")
        return

    file_path = os.path.join(os.getcwd(), "sms.py")
    process = subprocess.Popen(["python", file_path, phone_number, lap])
    processes.append(process)
    bot.reply_to(message, f'Gửi Yêu Cầu Tấn Công Thành Công \n+ Bot : {namebot} \n+ Số Tấn Công : [ {phone_number} ]\n+ Lặp lại : {lap}\n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')
  
#Lệnh View_str
@bot.message_handler(commands=['view_str'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP LINK STORY CÔNG KHAI /view_str {link story công khai} ')
        return
    
    
        

    url_str = message.text.split()[1] 
        

    file_path = os.path.join(os.getcwd(), "viewstory.py")
    process = subprocess.Popen(["python", file_path, url_str, cookie])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Buff View Thành Công  \n+ Bot : {namebot} \n+ Link video : [ {url_str} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')
    
#Lệnh followfb
@bot.message_handler(commands=['followfb'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP LINK ID FACEBOOK /followfb {Link ID FB} ')
        return
    
    
        

    id = message.text.split()[1] 
        

    file_path = os.path.join(os.getcwd(), "buff_follow.py")
    process = subprocess.Popen(["python", file_path, id, cookie])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Buff Follow Thành Công  \n+ Bot : {namebot} \n+ ID Facebook: [ {id} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')

#Lệnh buffmember
@bot.message_handler(commands=['buffmember'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP LINK GROUP /buffmember {Link Nhập Group FB} ')
        return
    
    
        

    linkgr = message.text.split()[1] 
        

    file_path = os.path.join(os.getcwd(), "buff_tv.py")
    process = subprocess.Popen(["python", file_path, linkgr, cookie])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Buff Thành Viên Thành Công  \n+ Bot : {namebot} \n+ Link Group: [ {linkgr} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')
    
#Lệnh view_str_feeling
@bot.message_handler(commands=['view_str_feeling'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP LINK STORY /view_str_vip_feeling {Link Nhập Story FB} ')
        return
    
    
        

    linkgr = message.text.split()[1] 
    cx = message.text.split()[1] 
    
        

    file_path = os.path.join(os.getcwd(), "likepro5.py")
    process = subprocess.Popen(["python", file_path, linkgr, cookie,cx])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Buff Cảm Xúc Story Thành Công  \n+ Bot : {namebot} \n+ Link Story: [ {linkgr} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')
    
#Lệnh spamcmt
@bot.message_handler(commands=['spamcmt'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP ID BÀI VIẾT /spamcmt {Nhập ID FB} ')
        return
    
    
        

    __post = message.text.split()[1] 
    
        

    file_path = os.path.join(os.getcwd(), "cmtpro5.py")
    process = subprocess.Popen(["python", file_path, __post])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Spam CMT Thành Công  \n+ Bot : {namebot} \n+ ID FB: [ {__post} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')
    
#Lệnh likes
@bot.message_handler(commands=['likes'])
def view_str(message):
    user_id = message.from_user.id
    if not os.path.exists(f"./vip/{user_id}.txt"):
      bot.reply_to(message, 'Bạn chưa đăng ký vip vui lòng liên hệ admin')
      return
    if len(message.text.split()) == 1:
        bot.reply_to(message, 'VUI LÒNG NHẬP ID BÀI VIẾT /likes {Nhập ID FB} ')
        return
    
    
        

    __post = message.text.split()[1] 
    
        

    file_path = os.path.join(os.getcwd(), "likes.py")
    process = subprocess.Popen(["python", file_path, __post])
    processes.append(process)
    bot.reply_to(message, f' Gửi Yêu Cầu Buff Like Bài Viết Thành Công  \n+ Bot : {namebot} \n+ ID FB: [ {__post} ] \n+ Chủ sở hữu 👑: {ten_admin} \n+ {full_ten_admin} ({ten_admin})')



#Lệnh lưu video tiktok không logo
@bot.message_handler(commands=['tiktok'])
def luuvideo_tiktok(message):
  if len(message.text.split()) == 1:
    sent_message = bot.reply_to(message, '❓VUI LÒNG NHẬP LINK VIDEO /tiktok {link video}.')
    return
  linktt = message.text.split()[1]
  data = f'url={linktt}'
  head = {
    "Host":"www.tikwm.com",
    "accept":"application/json, text/javascript, */*; q=0.01",
    "content-type":"application/x-www-form-urlencoded; charset=UTF-8",
    "user-agent":"Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36"
  }
  response = requests.post("https://www.tikwm.com/api/",data=data,headers=head).json()
  linkz = response['data']['play']
  rq = response['data']
  tieude = rq['title']
  view = rq['play_count']
  sent_message = bot.reply_to(message, f'Xin chờ một tí...!😴\n+ Tiêu đề: {tieude}\n+ Số view: {view}')
  try:
   bot.send_video(message.chat.id, video=linkz, caption=f'Đã xong cảm ơn bạn đã dùng bot⭐\n+ Tiêu đề: {tieude}\n+ Số view: {view}', reply_to_message_id=message.message_id, supports_streaming=True)
  except Exception as e:
   bot.reply_to(message, f'Video quá nặng tôi không thể gửi vui lòng tự tải: {linkz}')
  bot.delete_message(chat_id=message.chat.id, message_id=sent_message.message_id)
  
 #Lệnh Get Token Facebook
@bot.message_handler(commands=['gettokenfb'])
def gettokenfb(message):
  if len(message.text.split()) == 1:
    sent_message = bot.reply_to(message, '❓VUI LÒNG NHẬP TOKEN FB /gettokenfb {token fb}')
    return
  gettokenfb = message.text.split()[1]
  hed_gettoken = {
        'authority': 'www.instagram.com',
        'accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'accept-language': 'vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
        'cache-control': 'no-cache',
        'cookie': gettokenfb,
        'pragma': 'no-cache',
        'sec-ch-ua': '" Not A;Brand";v="99", "Chromium";v="102", "Google Chrome";v="102"',
        'sec-ch-ua-mobile': '?0',
        'sec-ch-ua-platform': '"Windows"',
        'sec-fetch-dest': 'document',
        'sec-fetch-mode': 'navigate',
        'sec-fetch-site': 'none',
        'sec-fetch-user': '?1',
        'upgrade-insecure-requests': '1',
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36',
  }
  token_fb = requests.get('https://www.facebook.com/dialog/oauth?client_id=124024574287414&redirect_uri=https://www.instagram.com/accounts/signup/&&scope=email&response_type=token', headers=hed_gettoken).url.split('#access_token=')[1].split('&data_access_expiration_time')[0]
  sent_message = bot.reply_to(message, f'Token Của Bạn: {token_fb}')

#Tải Video YouTube Qua Link
@bot.message_handler(commands=['youtube'])
def handle_youtube(message):
 if message.text and len(message.text.split()) > 1:
  youtube = YouTube(message.text.split()[1])
  sent_message = bot.reply_to(message, f'Xin chờ 1 tí...!😴\nTiêu đề: {youtube.title} \nThời lượng: {youtube.length} Giây\nĐược tải lên bởi: {youtube.author}')
  try:
   video = youtube.streams.get_highest_resolution()
   video.download()
   bot.send_video(message.chat.id, video=open(video.default_filename, 'rb'), caption=f'Đã xong cảm ơn bạn đã dùng bot⭐\nTiêu đề: {youtube.title} \nThời lượng: {youtube.length} Giây\nĐược tải lên bởi: {youtube.author}', reply_to_message_id=message.message_id, supports_streaming=True,timeout=3000000)
   os.remove(video.default_filename)
   bot.delete_message(chat_id=message.chat.id, message_id=sent_message.message_id)
  except Exception as e:
   bot.reply_to(message, f'Đã xảy ra lỗi: {str(e)}')
   os.remove(video.default_filename)
 else:
  bot.reply_to(message, '❓Sử dụng: /youtube {link_video}.')

@bot.message_handler(commands=['how'])
def help(message):
    how_text = '''
Chào mừng Bạn đến BOT Tự Động !
nơi giúp bạn tự động kiếm lệnh chạy tool và setup 
sau đây là các lệnh để giúp bạn bên dưới 👇 
/taitool 
/setuptool 
/info 
/muakey
'''
    bot.reply_to(message, how_text)
    
@bot.message_handler(commands=['menu'])
def menu(message):
    menu_text = '''
Danh sách lệnh:


/superspam {số điện thoại} {so lan}: Gửi tin nhắn SMS Call.

/view_str {Buff View Story} Tăng lượt xem story fb.

/followfb {Buff Follow} Tăng Người Theo Dõi Fb

/buffmember {Buff Member} Tăng người tham Gia Vào Group fb

/view_str_feeling {Buff Story} Tăng Cảm Xúc Story + Xem Story

/spamcmt {Spam CMT} Spam CMT Bằng Pro5

/likes {Like Bài Viết} Thả Cảm Xúc Like Bài Viết

/tiktok {Tải Video} Không Có Logo Từ TikTok

/youtube {Tải Video} Thông Qua Link YouTube

/gettokenfb {Get Token FB} Tự Động Lấy Token FB
'''
    bot.reply_to(message, menu_text)
    
@bot.message_handler(commands=['taitool'])
def taitool(message):
    taitool_text = '''
- CTOOL Đã Update Lên Phiên Bản v3.4
- Vượt Trội Hơn So Với Bản V3.3
+ Và Đã Được Sửa Lại Thông Tin Banner Của Admin nhé 
+ Và Các Chế Độ Của Chúng Ta Khi Vào Sẽ Ko Bị Vào Sai Chế Độ Nhé 
+ Và Đã Gộp Hết Tool Vào Một Link Tải Tool Nhé Mọi Người 
=> Link Tool:
https://keyvip24h.dev/taitool/


Cảm Ơn Mọi Người Đã Đồng Hành Cùng Với Chúng Tôi Trong Thời Gian Qua.
                                   
~ CTool X Team ~
'''
    bot.reply_to(message, taitool_text)


@bot.message_handler(commands=['setuptool'])
def setuptool(message):
    setuptool_text = '''
👉 Link Setup Tại Đây: https://anorintool.blogspot.com/2022/04/blog-post_9.html?m=1
'''
    bot.reply_to(message, setuptool_text)
    

@bot.message_handler(commands=['info'])
def info(message):
    info_text = '''
👉 Liên Hệ Cho Tôi Tại Đây: https://instabio.cc/4091605gRL8NS
'''
    bot.reply_to(message, info_text)


@bot.message_handler(commands=['muakey'])
def muakey(message):
    muakey_text = '''
👉 Mua Key Tại: https://keyvip24h.dev/
'''
    bot.reply_to(message, muakey_text)
    
    
#Lệnh khởi đầu để xem lệnh
@bot.message_handler(commands=['startvip'])
def startvip(message):
  video = random.choice(["https://keyvip24h.dev/video_random/1.mp4", "https://keyvip24h.dev/video_random/2.mp4", "https://keyvip24h.dev/video_random/3.mp4", "https://keyvip24h.dev/video_random/4.mp4", "https://keyvip24h.dev/video_random/5.mp4", "https://keyvip24h.dev/video_random/6.mp4", "https://keyvip24h.dev/video_random/7.mp4", "https://keyvip24h.dev/video_random/8.mp4", "https://keyvip24h.dev/video_random/9.mp4", "https://keyvip24h.dev/video_random/10.mp4", "https://keyvip24h.dev/video_random/11.mp4", "https://keyvip24h.dev/video_random/12.mp4", "https://keyvip24h.dev/video_random/13.mp4", "https://keyvip24h.dev/video_random/14.mp4"])
  help_text = '''
⭐Danh sách lệnh⭐
+ /menu - Để xem lệnh
+ /how - Để xem lệnh bot tool Tremux
'''
  bot.send_video(message.chat.id, video=video, caption=help_text, reply_to_message_id=message.message_id, supports_streaming=True) 
        
bot.polling()
