from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains

from pathlib import Path, PureWindowsPath
import requests
import sys

from pywebcopy import save_webpage

#import wget
driver = webdriver.Firefox()
driver.get("https://leetcode.com/problemset/all/")
driver.implicitly_wait(20)

problem_link = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]/div/a')


problem_name = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[3]')
problem_id = driver.find_element_by_xpath('//*[@id="question-app"]/div/div[2]/div[2]/div[2]/table/tbody[1]/tr[1]/td[2]')

problem_link_txt = problem_link.get_attribute('href')
print('problem_id: ', problem_id.text)
print('problem_name: ', problem_name.text)
print('problem_link: ', problem_link_txt)

#problem_link.click()
driver.implicitly_wait(40)

#result = requests.get(problem_link_txt, verify=False)
#page = result.text
#print('page: ', page)
#problem_body = driver.find_element_by_xpath('/html/body/div[4]/div[2]')

#problem_body = driver.find_element_by_xpath('//*[contains(text(), "question-picker-detail")]')
#print('problem_body: ', problem_body.text)

data_folder = Path("C:/Users/MH9130/Downloads/test/")
file_to_open = data_folder / 'test.html'
path_on_windows = PureWindowsPath(file_to_open)

print('path_on_windows: ', path_on_windows)

driver2 = webdriver.Firefox()
driver2.get(problem_link_txt)

'''
r = requests.get("https://leetcode.com/problems/two-sum/", verify=False)
with open(path_on_windows, 'wb') as f:
	f.write(r.content) #driver.page_source
'''
save_me = ActionChains(driver2).key_down(Keys.CONTROL).key_down('s').key_up(Keys.CONTROL).key_up('s')
save_me.perform()
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


