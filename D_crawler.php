<?php
/**
 * Created by PhpStorm.
 * User: zhenghu
 * Date: 15 年 五月. 2.
 * Time: 23:21
 */


$url = "http://www.feeyo.com/vflight/flightlist.htm";

$main_content = file_get_contents($url);


//print_r($main_content);
$test_content = '<a href="http://www.feeyo.com/vflight/delay/a/CSX_SZX_ZH9978.htm" target="_blank" title="CSX-SZX">ZH9978</a>';

$main_content = '<!--liststart--><a href='http://www.feeyo.com/vflight/delay/a/CDG_XIY_ZI1908.htm' target='_blank' title='CDG-XIY'>ZI1908</a> <a href='http://www.feeyo.com/vflight/delay/a/CDG_HGH_ZI1908.htm' target='_blank' title='CDG-HGH'>ZI1908</a> <a href='http://www.feeyo.com/vflight/delay/a/XIY_CDG_ZI1907.htm' target='_blank' title='XIY-CDG'>ZI1907</a> <a href='http://www.feeyo.com/vflight/delay/a/HGH_CDG_ZI1907.htm' target='_blank' title='HGH-CDG'>ZI1907</a> <a href='http://www.feeyo.com/vflight/delay/a/KMG_SZX_ZH9996.htm' target='_blank' title='KMG-SZX'>ZH9996</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KMG_ZH9995.htm' target='_blank' title='SZX-KMG'>ZH9995</a> <a href='http://www.feeyo.com/vflight/delay/a/HFE_SZX_ZH9992.htm' target='_blank' title='HFE-SZX'>ZH9992</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HFE_ZH9991.htm' target='_blank' title='SZX-HFE'>ZH9991</a> <a href='http://www.feeyo.com/vflight/delay/a/HFE_SZX_ZH9990.htm' target='_blank' title='HFE-SZX'>ZH9990</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HFE_ZH9989.htm' target='_blank' title='SZX-HFE'>ZH9989</a> <a href='http://www.feeyo.com/vflight/delay/a/INC_SZX_ZH9988.htm' target='_blank' title='INC-SZX'>ZH9988</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_INC_ZH9987.htm' target='_blank' title='SZX-INC'>ZH9987</a> <a href='http://www.feeyo.com/vflight/delay/a/KMG_SZX_ZH9986.htm' target='_blank' title='KMG-SZX'>ZH9986</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KMG_ZH9985.htm' target='_blank' title='SZX-KMG'>ZH9985</a> <a href='http://www.feeyo.com/vflight/delay/a/LJG_SZX_ZH9982.htm' target='_blank' title='LJG-SZX'>ZH9982</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_LJG_ZH9981.htm' target='_blank' title='SZX-LJG'>ZH9981</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_SZX_ZH9980.htm' target='_blank' title='SHE-SZX'>ZH9980</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHE_ZH9979.htm' target='_blank' title='SZX-SHE'>ZH9979</a> <a href='http://www.feeyo.com/vflight/delay/a/LHW_SZX_ZH9978.htm' target='_blank' title='LHW-SZX'>ZH9978</a> <a href='http://www.feeyo.com/vflight/delay/a/LHW_CSX_ZH9978.htm' target='_blank' title='LHW-CSX'>ZH9978</a> <a href='http://www.feeyo.com/vflight/delay/a/CSX_SZX_ZH9978.htm' target='_blank' title='CSX-SZX'>ZH9978</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_LHW_ZH9977.htm' target='_blank' title='SZX-LHW'>ZH9977</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CSX_ZH9977.htm' target='_blank' title='SZX-CSX'>ZH9977</a> <a href='http://www.feeyo.com/vflight/delay/a/CSX_LHW_ZH9977.htm' target='_blank' title='CSX-LHW'>ZH9977</a> <a href='http://www.feeyo.com/vflight/delay/a/KWE_SZX_ZH9976.htm' target='_blank' title='KWE-SZX'>ZH9976</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KWE_ZH9975.htm' target='_blank' title='SZX-KWE'>ZH9975</a> <a href='http://www.feeyo.com/vflight/delay/a/CTU_SZX_ZH9974.htm' target='_blank' title='CTU-SZX'>ZH9974</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CTU_ZH9973.htm' target='_blank' title='SZX-CTU'>ZH9973</a> <a href='http://www.feeyo.com/vflight/delay/a/HFE_SZX_ZH9972.htm' target='_blank' title='HFE-SZX'>ZH9972</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HFE_ZH9971.htm' target='_blank' title='SZX-HFE'>ZH9971</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9970.htm' target='_blank' title='PEK-SZX'>ZH9970</a> <a href='http://www.feeyo.com/vflight/delay/a/WNZ_SZX_ZH9966.htm' target='_blank' title='WNZ-SZX'>ZH9966</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_WNZ_ZH9965.htm' target='_blank' title='SZX-WNZ'>ZH9965</a> <a href='http://www.feeyo.com/vflight/delay/a/HGH_SZX_ZH9964.htm' target='_blank' title='HGH-SZX'>ZH9964</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HGH_ZH9963.htm' target='_blank' title='SZX-HGH'>ZH9963</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9959.htm' target='_blank' title='SZX-PEK'>ZH9959</a> <a href='http://www.feeyo.com/vflight/delay/a/TYN_SZX_ZH9956.htm' target='_blank' title='TYN-SZX'>ZH9956</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TYN_ZH9955.htm' target='_blank' title='SZX-TYN'>ZH9955</a> <a href='http://www.feeyo.com/vflight/delay/a/CGO_SZX_ZH9950.htm' target='_blank' title='CGO-SZX'>ZH9950</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CGO_ZH9949.htm' target='_blank' title='SZX-CGO'>ZH9949</a> <a href='http://www.feeyo.com/vflight/delay/a/YIH_SZX_ZH9948.htm' target='_blank' title='YIH-SZX'>ZH9948</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_YIH_ZH9947.htm' target='_blank' title='SZX-YIH'>ZH9947</a> <a href='http://www.feeyo.com/vflight/delay/a/YIH_SZX_ZH9944.htm' target='_blank' title='YIH-SZX'>ZH9944</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_YIH_ZH9943.htm' target='_blank' title='SZX-YIH'>ZH9943</a> <a href='http://www.feeyo.com/vflight/delay/a/TNA_SZX_ZH9940.htm' target='_blank' title='TNA-SZX'>ZH9940</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TNA_ZH9939.htm' target='_blank' title='SZX-TNA'>ZH9939</a> <a href='http://www.feeyo.com/vflight/delay/a/KHN_PEK_ZH9938.htm' target='_blank' title='KHN-PEK'>ZH9938</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_KHN_ZH9937.htm' target='_blank' title='PEK-KHN'>ZH9937</a> <a href='http://www.feeyo.com/vflight/delay/a/TSN_SZX_ZH9936.htm' target='_blank' title='TSN-SZX'>ZH9936</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TSN_ZH9935.htm' target='_blank' title='SZX-TSN'>ZH9935</a> <a href='http://www.feeyo.com/vflight/delay/a/YNT_SZX_ZH9934.htm' target='_blank' title='YNT-SZX'>ZH9934</a> <a href='http://www.feeyo.com/vflight/delay/a/CGQ_YNT_ZH9934.htm' target='_blank' title='CGQ-YNT'>ZH9934</a> <a href='http://www.feeyo.com/vflight/delay/a/CGQ_SZX_ZH9934.htm' target='_blank' title='CGQ-SZX'>ZH9934</a> <a href='http://www.feeyo.com/vflight/delay/a/YNT_CGQ_ZH9933.htm' target='_blank' title='YNT-CGQ'>ZH9933</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_YNT_ZH9933.htm' target='_blank' title='SZX-YNT'>ZH9933</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CGQ_ZH9933.htm' target='_blank' title='SZX-CGQ'>ZH9933</a> <a href='http://www.feeyo.com/vflight/delay/a/HRB_SZX_ZH9932.htm' target='_blank' title='HRB-SZX'>ZH9932</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HRB_ZH9931.htm' target='_blank' title='SZX-HRB'>ZH9931</a> <a href='http://www.feeyo.com/vflight/delay/a/TAO_SZX_ZH9930.htm' target='_blank' title='TAO-SZX'>ZH9930</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TAO_ZH9929.htm' target='_blank' title='SZX-TAO'>ZH9929</a> <a href='http://www.feeyo.com/vflight/delay/a/TNA_SZX_ZH9928.htm' target='_blank' title='TNA-SZX'>ZH9928</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TNA_ZH9927.htm' target='_blank' title='SZX-TNA'>ZH9927</a> <a href='http://www.feeyo.com/vflight/delay/a/HAK_SZX_ZH9926.htm' target='_blank' title='HAK-SZX'>ZH9926</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HAK_ZH9925.htm' target='_blank' title='SZX-HAK'>ZH9925</a> <a href='http://www.feeyo.com/vflight/delay/a/CTU_SZX_ZH9924.htm' target='_blank' title='CTU-SZX'>ZH9924</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CTU_ZH9923.htm' target='_blank' title='SZX-CTU'>ZH9923</a> <a href='http://www.feeyo.com/vflight/delay/a/TCZ_SZX_ZH9922.htm' target='_blank' title='TCZ-SZX'>ZH9922</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TCZ_ZH9921.htm' target='_blank' title='SZX-TCZ'>ZH9921</a> <a href='http://www.feeyo.com/vflight/delay/a/SHA_SZX_ZH9920.htm' target='_blank' title='SHA-SZX'>ZH9920</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHA_ZH9919.htm' target='_blank' title='SZX-SHA'>ZH9919</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_SZX_ZH9918.htm' target='_blank' title='PVG-SZX'>ZH9918</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PVG_ZH9917.htm' target='_blank' title='SZX-PVG'>ZH9917</a> <a href='http://www.feeyo.com/vflight/delay/a/CKG_SZX_ZH9916.htm' target='_blank' title='CKG-SZX'>ZH9916</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CKG_ZH9915.htm' target='_blank' title='SZX-CKG'>ZH9915</a> <a href='http://www.feeyo.com/vflight/delay/a/MIG_SZX_ZH9912.htm' target='_blank' title='MIG-SZX'>ZH9912</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_MIG_ZH9911.htm' target='_blank' title='SZX-MIG'>ZH9911</a> <a href='http://www.feeyo.com/vflight/delay/a/HAK_SZX_ZH9910.htm' target='_blank' title='HAK-SZX'>ZH9910</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HAK_ZH9909.htm' target='_blank' title='SZX-HAK'>ZH9909</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_SZX_ZH9908.htm' target='_blank' title='PVG-SZX'>ZH9908</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_JJN_ZH9908.htm' target='_blank' title='PVG-JJN'>ZH9908</a> <a href='http://www.feeyo.com/vflight/delay/a/JJN_SZX_ZH9908.htm' target='_blank' title='JJN-SZX'>ZH9908</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PVG_ZH9907.htm' target='_blank' title='SZX-PVG'>ZH9907</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_JJN_ZH9907.htm' target='_blank' title='SZX-JJN'>ZH9907</a> <a href='http://www.feeyo.com/vflight/delay/a/JJN_PVG_ZH9907.htm' target='_blank' title='JJN-PVG'>ZH9907</a> <a href='http://www.feeyo.com/vflight/delay/a/ZHA_SZX_ZH9906.htm' target='_blank' title='ZHA-SZX'>ZH9906</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_ZHA_ZH9905.htm' target='_blank' title='SZX-ZHA'>ZH9905</a> <a href='http://www.feeyo.com/vflight/delay/a/SYX_SZX_ZH9902.htm' target='_blank' title='SYX-SZX'>ZH9902</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SYX_ZH9901.htm' target='_blank' title='SZX-SYX'>ZH9901</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_SZX_ZH9898.htm' target='_blank' title='SHE-SZX'>ZH9898</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHE_ZH9897.htm' target='_blank' title='SZX-SHE'>ZH9897</a> <a href='http://www.feeyo.com/vflight/delay/a/KWE_SZX_ZH9896.htm' target='_blank' title='KWE-SZX'>ZH9896</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KWE_ZH9895.htm' target='_blank' title='SZX-KWE'>ZH9895</a> <a href='http://www.feeyo.com/vflight/delay/a/SHA_SZX_ZH9894.htm' target='_blank' title='SHA-SZX'>ZH9894</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHA_ZH9893.htm' target='_blank' title='SZX-SHA'>ZH9893</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_SZX_ZH9892.htm' target='_blank' title='PVG-SZX'>ZH9892</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PVG_ZH9891.htm' target='_blank' title='SZX-PVG'>ZH9891</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9890.htm' target='_blank' title='SZX-PEK'>ZH9890</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9889.htm' target='_blank' title='PEK-SZX'>ZH9889</a> <a href='http://www.feeyo.com/vflight/delay/a/TYN_SZX_ZH9886.htm' target='_blank' title='TYN-SZX'>ZH9886</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TYN_ZH9885.htm' target='_blank' title='SZX-TYN'>ZH9885</a> <a href='http://www.feeyo.com/vflight/delay/a/KHN_SZX_ZH9884.htm' target='_blank' title='KHN-SZX'>ZH9884</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KHN_ZH9883.htm' target='_blank' title='SZX-KHN'>ZH9883</a> <a href='http://www.feeyo.com/vflight/delay/a/XIY_SZX_ZH9882.htm' target='_blank' title='XIY-SZX'>ZH9882</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_XIY_ZH9881.htm' target='_blank' title='SZX-XIY'>ZH9881</a> <a href='http://www.feeyo.com/vflight/delay/a/TAO_SZX_ZH9880.htm' target='_blank' title='TAO-SZX'>ZH9880</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_TAO_ZH9879.htm' target='_blank' title='SZX-TAO'>ZH9879</a> <a href='http://www.feeyo.com/vflight/delay/a/NKG_SZX_ZH9878.htm' target='_blank' title='NKG-SZX'>ZH9878</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_NKG_ZH9877.htm' target='_blank' title='SZX-NKG'>ZH9877</a> <a href='http://www.feeyo.com/vflight/delay/a/HAK_SZX_ZH9876.htm' target='_blank' title='HAK-SZX'>ZH9876</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HAK_ZH9875.htm' target='_blank' title='SZX-HAK'>ZH9875</a> <a href='http://www.feeyo.com/vflight/delay/a/JUZ_SZX_ZH9874.htm' target='_blank' title='JUZ-SZX'>ZH9874</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_JUZ_ZH9873.htm' target='_blank' title='SZX-JUZ'>ZH9873</a> <a href='http://www.feeyo.com/vflight/delay/a/MIG_SZX_ZH9872.htm' target='_blank' title='MIG-SZX'>ZH9872</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_MIG_ZH9871.htm' target='_blank' title='SZX-MIG'>ZH9871</a> <a href='http://www.feeyo.com/vflight/delay/a/KHN_SZX_ZH9870.htm' target='_blank' title='KHN-SZX'>ZH9870</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KHN_ZH9869.htm' target='_blank' title='SZX-KHN'>ZH9869</a> <a href='http://www.feeyo.com/vflight/delay/a/HGH_SZX_ZH9868.htm' target='_blank' title='HGH-SZX'>ZH9868</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HGH_ZH9867.htm' target='_blank' title='SZX-HGH'>ZH9867</a> <a href='http://www.feeyo.com/vflight/delay/a/NKG_SZX_ZH9866.htm' target='_blank' title='NKG-SZX'>ZH9866</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_NKG_ZH9865.htm' target='_blank' title='SZX-NKG'>ZH9865</a> <a href='http://www.feeyo.com/vflight/delay/a/HGH_SZX_ZH9864.htm' target='_blank' title='HGH-SZX'>ZH9864</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HGH_ZH9863.htm' target='_blank' title='SZX-HGH'>ZH9863</a> <a href='http://www.feeyo.com/vflight/delay/a/HGH_SZX_ZH9860.htm' target='_blank' title='HGH-SZX'>ZH9860</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HGH_ZH9859.htm' target='_blank' title='SZX-HGH'>ZH9859</a> <a href='http://www.feeyo.com/vflight/delay/a/CGQ_SZX_ZH9858.htm' target='_blank' title='CGQ-SZX'>ZH9858</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CGQ_ZH9857.htm' target='_blank' title='SZX-CGQ'>ZH9857</a> <a href='http://www.feeyo.com/vflight/delay/a/CKG_SZX_ZH9856.htm' target='_blank' title='CKG-SZX'>ZH9856</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CKG_ZH9855.htm' target='_blank' title='SZX-CKG'>ZH9855</a> <a href='http://www.feeyo.com/vflight/delay/a/WUH_SZX_ZH9854.htm' target='_blank' title='WUH-SZX'>ZH9854</a> <a href='http://www.feeyo.com/vflight/delay/a/HET_WUH_ZH9854.htm' target='_blank' title='HET-WUH'>ZH9854</a> <a href='http://www.feeyo.com/vflight/delay/a/HET_SZX_ZH9854.htm' target='_blank' title='HET-SZX'>ZH9854</a> <a href='http://www.feeyo.com/vflight/delay/a/WUH_HET_ZH9853.htm' target='_blank' title='WUH-HET'>ZH9853</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_WUH_ZH9853.htm' target='_blank' title='SZX-WUH'>ZH9853</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HET_ZH9853.htm' target='_blank' title='SZX-HET'>ZH9853</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9852.htm' target='_blank' title='PEK-SZX'>ZH9852</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9851.htm' target='_blank' title='SZX-PEK'>ZH9851</a> <a href='http://www.feeyo.com/vflight/delay/a/YTY_SZX_ZH9850.htm' target='_blank' title='YTY-SZX'>ZH9850</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_YTY_ZH9850.htm' target='_blank' title='SHE-YTY'>ZH9850</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_SZX_ZH9850.htm' target='_blank' title='SHE-SZX'>ZH9850</a> <a href='http://www.feeyo.com/vflight/delay/a/YTY_SHE_ZH9849.htm' target='_blank' title='YTY-SHE'>ZH9849</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_YTY_ZH9849.htm' target='_blank' title='SZX-YTY'>ZH9849</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHE_ZH9849.htm' target='_blank' title='SZX-SHE'>ZH9849</a> <a href='http://www.feeyo.com/vflight/delay/a/URC_SZX_ZH9846.htm' target='_blank' title='URC-SZX'>ZH9846</a> <a href='http://www.feeyo.com/vflight/delay/a/URC_CGO_ZH9846.htm' target='_blank' title='URC-CGO'>ZH9846</a> <a href='http://www.feeyo.com/vflight/delay/a/CGO_SZX_ZH9846.htm' target='_blank' title='CGO-SZX'>ZH9846</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_URC_ZH9845.htm' target='_blank' title='SZX-URC'>ZH9845</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CGO_ZH9845.htm' target='_blank' title='SZX-CGO'>ZH9845</a> <a href='http://www.feeyo.com/vflight/delay/a/CGO_URC_ZH9845.htm' target='_blank' title='CGO-URC'>ZH9845</a> <a href='http://www.feeyo.com/vflight/delay/a/HAK_SZX_ZH9844.htm' target='_blank' title='HAK-SZX'>ZH9844</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HAK_ZH9843.htm' target='_blank' title='SZX-HAK'>ZH9843</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_SZX_ZH9842.htm' target='_blank' title='SHE-SZX'>ZH9842</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHE_ZH9841.htm' target='_blank' title='SZX-SHE'>ZH9841</a> <a href='http://www.feeyo.com/vflight/delay/a/YCU_SZX_ZH9840.htm' target='_blank' title='YCU-SZX'>ZH9840</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_YCU_ZH9839.htm' target='_blank' title='SZX-YCU'>ZH9839</a> <a href='http://www.feeyo.com/vflight/delay/a/XNN_SZX_ZH9836.htm' target='_blank' title='XNN-SZX'>ZH9836</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_XNN_ZH9835.htm' target='_blank' title='SZX-XNN'>ZH9835</a> <a href='http://www.feeyo.com/vflight/delay/a/KMG_SZX_ZH9834.htm' target='_blank' title='KMG-SZX'>ZH9834</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_KMG_ZH9833.htm' target='_blank' title='SZX-KMG'>ZH9833</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9832.htm' target='_blank' title='PEK-SZX'>ZH9832</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9831.htm' target='_blank' title='SZX-PEK'>ZH9831</a> <a href='http://www.feeyo.com/vflight/delay/a/DLC_SZX_ZH9830.htm' target='_blank' title='DLC-SZX'>ZH9830</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_DLC_ZH9829.htm' target='_blank' title='SZX-DLC'>ZH9829</a> <a href='http://www.feeyo.com/vflight/delay/a/SHE_SZX_ZH9828.htm' target='_blank' title='SHE-SZX'>ZH9828</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHE_ZH9827.htm' target='_blank' title='SZX-SHE'>ZH9827</a> <a href='http://www.feeyo.com/vflight/delay/a/CKG_SZX_ZH9826.htm' target='_blank' title='CKG-SZX'>ZH9826</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CKG_ZH9825.htm' target='_blank' title='SZX-CKG'>ZH9825</a> <a href='http://www.feeyo.com/vflight/delay/a/CTU_SZX_ZH9824.htm' target='_blank' title='CTU-SZX'>ZH9824</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CTU_ZH9823.htm' target='_blank' title='SZX-CTU'>ZH9823</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9822.htm' target='_blank' title='PEK-SZX'>ZH9822</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9821.htm' target='_blank' title='SZX-PEK'>ZH9821</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_SZX_ZH9820.htm' target='_blank' title='PVG-SZX'>ZH9820</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PVG_ZH9819.htm' target='_blank' title='SZX-PVG'>ZH9819</a> <a href='http://www.feeyo.com/vflight/delay/a/HRB_SZX_ZH9818.htm' target='_blank' title='HRB-SZX'>ZH9818</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HRB_ZH9817.htm' target='_blank' title='SZX-HRB'>ZH9817</a> <a href='http://www.feeyo.com/vflight/delay/a/SHA_SZX_ZH9816.htm' target='_blank' title='SHA-SZX'>ZH9816</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHA_ZH9815.htm' target='_blank' title='SZX-SHA'>ZH9815</a> <a href='http://www.feeyo.com/vflight/delay/a/SHA_SZX_ZH9814.htm' target='_blank' title='SHA-SZX'>ZH9814</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SHA_ZH9813.htm' target='_blank' title='SZX-SHA'>ZH9813</a> <a href='http://www.feeyo.com/vflight/delay/a/PVG_SZX_ZH9812.htm' target='_blank' title='PVG-SZX'>ZH9812</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PVG_ZH9811.htm' target='_blank' title='SZX-PVG'>ZH9811</a> <a href='http://www.feeyo.com/vflight/delay/a/HAK_SZX_ZH9810.htm' target='_blank' title='HAK-SZX'>ZH9810</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HAK_ZH9809.htm' target='_blank' title='SZX-HAK'>ZH9809</a> <a href='http://www.feeyo.com/vflight/delay/a/CGO_SZX_ZH9808.htm' target='_blank' title='CGO-SZX'>ZH9808</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_CGO_ZH9807.htm' target='_blank' title='SZX-CGO'>ZH9807</a> <a href='http://www.feeyo.com/vflight/delay/a/HYN_SZX_ZH9806.htm' target='_blank' title='HYN-SZX'>ZH9806</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HYN_ZH9805.htm' target='_blank' title='SZX-HYN'>ZH9805</a> <a href='http://www.feeyo.com/vflight/delay/a/HYN_SZX_ZH9804.htm' target='_blank' title='HYN-SZX'>ZH9804</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HYN_ZH9803.htm' target='_blank' title='SZX-HYN'>ZH9803</a> <a href='http://www.feeyo.com/vflight/delay/a/PEK_SZX_ZH9802.htm' target='_blank' title='PEK-SZX'>ZH9802</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_PEK_ZH9801.htm' target='_blank' title='SZX-PEK'>ZH9801</a> <a href='http://www.feeyo.com/vflight/delay/a/HFE_SZX_ZH9798.htm' target='_blank' title='HFE-SZX'>ZH9798</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HFE_ZH9797.htm' target='_blank' title='SZX-HFE'>ZH9797</a> <a href='http://www.feeyo.com/vflight/delay/a/MFM_WUX_ZH9796.htm' target='_blank' title='MFM-WUX'>ZH9796</a> <a href='http://www.feeyo.com/vflight/delay/a/WUX_MFM_ZH9795.htm' target='_blank' title='WUX-MFM'>ZH9795</a> <a href='http://www.feeyo.com/vflight/delay/a/SIN_SZX_ZH9792.htm' target='_blank' title='SIN-SZX'>ZH9792</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_SIN_ZH9791.htm' target='_blank' title='SZX-SIN'>ZH9791</a> <a href='http://www.feeyo.com/vflight/delay/a/ICN_SZX_ZH9788.htm' target='_blank' title='ICN-SZX'>ZH9788</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_ICN_ZH9787.htm' target='_blank' title='SZX-ICN'>ZH9787</a> <a href='http://www.feeyo.com/vflight/delay/a/HFE_SZX_ZH9786.htm' target='_blank' title='HFE-SZX'>ZH9786</a> <a href='http://www.feeyo.com/vflight/delay/a/SZX_HFE_ZH9785.htm' target='_blank' title='SZX-HFE'>ZH9785</a> <!--listend-->'
$uri_pattern = '/<a href="(.*)" /';

//$uri_pattern = '/a/';
preg_match_all($uri_pattern, $main_content, $matches);
//preg_match_all($uri_pattern, $test_content, $matches);
print_r($matches);
//print($main_content);