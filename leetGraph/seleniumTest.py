from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains

from pathlib import Path, PureWindowsPath
import requests
import sys

#from pywebcopy import save_webpage

#import wget

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

driver = webdriver.Firefox()


f = open('C:\\Users\MH9130\Sadi\AkhtarVai\SadiHassan.github.io\leetGraph\out.txt', 'w')

for i in range(1,1000):
	driver.get("https://leetcode.com/problemset/all/#page-" + str( 1 + int(i/50)))
	driver.implicitly_wait(20)	
	
	print(str(i) + ' =========================>')
	problem_link = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(i) +']/td[3]/div/a')
	problem_name = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(i) +']/td[3]')
	problem_id = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[' + str(i) +']/td[2]')

	problem_link_txt = problem_link.get_attribute('href')
	print('problem_id: ', problem_id.text)
	print('problem_name: ', problem_name.text)
	print('problem_link: ', problem_link_txt)
	
	f.write(problem_id.text);
	f.write("-");
	f.write(problem_name.text);
	
	problem_link.click()
	driver.implicitly_wait(25)
	'''
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[1]
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[2]
	/html/body/div[1]/div[3]/div[2]/div[2]/div[1]/div/div/div[2]/div[2]/div[2]/table/tbody[2]/tr/td/span[2]/a[3]
	'''
	similar_problems = driver.find_elements_by_class_name('question__25Pw')

	#print('similar_problems ==> ', similar_problems)
	#print('similar_problems ==> ', type(similar_problems))

	for problem in similar_problems:
		f.write(",")
		print(problem.get_attribute('innerHTML'))
		f.write( get_problem_name_from_html(problem.get_attribute('innerHTML')))
	
	f.write("\n")	
	#driver.back()
	#driver.implicitly_wait(25)
	
	
input("Press any key to exit...")
f.close();
driver.close()	

'''
/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]

/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]/div[1]
/html/body/div[1]/div/div[2]/div/div/div[1]/div/div[1]/div[1]/div/div[2]/div/div[7]/div[2]/div[2]
'''