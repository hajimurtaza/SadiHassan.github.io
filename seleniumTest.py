from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

import sys
driver = webdriver.Firefox()
driver.get("https://leetcode.com/problemset/all/")
driver.implicitly_wait(20)

problem_link = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]/div/a')


problem_name = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]')
problem_id = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[2]')

problem_link2 = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]/div')
print('problem_id: ', problem_id.text)
print('problem_name: ', problem_name.text)
print('problem_link: ', problem_link.get_attribute('href'))
problem_link.click()
input("Press any key to exit...")
driver.close()	


'''
#//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]/div/a
try:
	problem_name = WebDriverWait(driver, 100).until(
        #EC.presence_of_element_located((By.ID, "myDynamicElement"))
		EC.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]')
		#print(problem_name)
    )
finally:
	problem_link.click()
	print(problem_name)
	input("Press any key to exit...")
	driver.close()	
'''
#input("Press any key to exit...")


