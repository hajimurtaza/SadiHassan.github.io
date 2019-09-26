from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains

from pathlib import Path, PureWindowsPath
import requests
import sys
from datetime import datetime
import time
#from pywebcopy import save_webpage

#import wget
#<a class="title__1kvt" href="/problems/powx-n/">Pow(x, n)</a><div class="difficulty__ES5S">Medium</div>
def get_problem_difficulty_from_html(str):
	ans = ""
	i = len(str) - 1
	cat_start = False;
	while i >= 0:
		if cat_start and str[i] == '>':
			break;
		if(str[i] == '<'):
			cat_start = True;
			i -= 1
			continue
		if cat_start:
			ans += str[i]	
		i -= 1
	return ans[::-1]
	
	
def get_problem_name_from_html(str):
	ans = "";
	cat_start = False;
	for i in range(0, len(str)):
		if cat_start and str[i] == '<':
			break;
		if str[i] == '>':
			cat_start = True
			continue
		if cat_start:
			ans += str[i]
	return ans

def get_problem_link_from_html(str):
	ans = ""
	begin_ind = str.find("href")
	cat_start = False;
	for i in range(begin_ind, len(str)):
		if cat_start and str[i] == '>':
			break;
		if str[i] == '=':
			cat_start = True;
			continue
		if cat_start:
			ans += str[i]
	return ans[1:len(ans)-2]

start = time.time()
	
driver = webdriver.Firefox()
driver.get("https://leetcode.com/problemset/all/")
driver.implicitly_wait(25)
now = datetime.now()
timestamp = datetime.timestamp(now)
f = open('C:\\Users\MH9130\Sadi\AkhtarVai\SadiHassan.github.io\leetGraph\out_' + str(timestamp) + '.csv', 'w')

#page_link = driver.find_element_by_xpath('/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[2]')
#page_link.click();
#exit(0);

for i in range(1, 1205):
	if i == 1205:
		break
	#driver.get("https://leetcode.com/problemset/all/#page-" + str( 1 + int(i/50)))
	#driver.implicitly_wait(20)	
	page_ind = int(i/50)
	page_link = driver.find_element_by_xpath('/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[' + str(1 + page_ind) + ']')
	page_link.click();
	driver.implicitly_wait(25)
	print(str(i) + ' =========================>')
	id = i % 50
	if id == 0:
		id = 1
	problem_link = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(id) +']/td[3]/div/a')
	problem_name = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(id) +']/td[3]')
	problem_id = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(id) +']/td[2]')

	problem_link_txt = problem_link.get_attribute('href')
	print('problem_id: ', problem_id.text)
	print('problem_name: ', problem_name.text)
	print('problem_link: ', problem_link_txt)
	
	f.write(problem_id.text);
	f.write("#");
	f.write(problem_name.text.strip());
	
	problem_link.click()
	driver.implicitly_wait(25)
	'''
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[1]
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[2]
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[3]
	
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[1]
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[2]
	'''
	similar_problems = driver.find_elements_by_class_name('question__25Pw')

	#print('similar_problems ==> ', similar_problems)
	#print('similar_problems ==> ', type(similar_problems))

	for problem in similar_problems:
		f.write(",")
		print(problem.get_attribute('innerHTML'))
		problem_html = problem.get_attribute('innerHTML')
		
		prob_name = get_problem_name_from_html(problem_html)
		prob_link = get_problem_link_from_html(problem_html)	
		prob_difficulty = get_problem_difficulty_from_html(problem_html)
		
		print('prob_name: ', prob_name)
		print('prob_link: ', prob_link)
		print('prob_difficulty: ', prob_difficulty)
		f.write( prob_name )
		f.write( '#' )
		f.write( prob_link )
		f.write( '#' )
		f.write( prob_difficulty )
		
	f.write("\n")	
	driver.back()
	driver.implicitly_wait(25)

f.close();
driver.close()	

end = time.time()
print("Execution Time: ", str(end - start))

input("Press any key to exit...")

'''
/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]

/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]/div[1]
/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]/div[2]
'''