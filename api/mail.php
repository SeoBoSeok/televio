<?php
include_once ('../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

$content = '<table cellpadding="0" cellspacing="0" style="width:100%;margin:0 auto;background-color:#fff;;-webkit-text-size-adjust:100%;text-align:left">
        <tbody><tr><td colspan="3" style="height:21px;background-color:#f5f5f5"></td></tr><tr><td colspan="3" style="height:29px"></td></tr><tr><td style="width:21px"></td><td>
            <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
            <tbody><tr><td style="margin:0;padding:0">
                <a href="http://shopping.naver.com/" rel="noreferrer noopener" target="_blank"><img src="http://imgshopping.naver.net/adcenter/email//img_naver_shopping2.gif" width="51" height="20" alt="NAVER 쇼핑" style="border:0" loading="lazy"></a>
            </td></tr><tr><td style="height:11px"></td></tr><tr><td style="font-size:28px;font-family:dotum,'돋움',Helvetica;color:#424240;line-height:34px;vertical-align:middle;font-weight:bold">
                <span style="color:#1ec800">입점</span>이 <span style="color:#1ec800">완료</span>되었습니다.<br>
                <span style="color:#1ec800">상품등록 여부</span>를 <span style="color:#1ec800">확인</span>해 주십시오.
            </td></tr></tbody></table>
        </td><td style="width:21px"></td></tr><tr><td colspan="3" style="height:21px"></td></tr><tr><td colspan="3" style="width:21px"></td></tr><tr><td style="width:21px"></td><td style="font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;line-height:24px;vertical-align:top">
              서비스 시작에 필요한 아래 안내 사항을 확인해 주세요.
            </td><td style="width:21px"></td></tr><tr><td colspan="3" style="height:24px;border-bottom:1px solid #e5e5e5">&nbsp;</td></tr><tr><td colspan="3" style="height:26px">&nbsp;</td></tr><tr><td style="width:21px"></td><td>
							<table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                <tbody><tr><td width="80" style="padding-right: 25px;padding-bottom:5px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;line-height:23px;vertical-align:top;font-weight:bold">
										쇼핑몰명
									</td><td style="padding-bottom:5px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#1ec800;line-height:23px;vertical-align:top;">
										도취마켓
									</td></tr><tr><td width="56" style="padding-right: 25px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;line-height:23px;vertical-align:top;font-weight:bold">
										쇼핑몰ID
									</td><td style="font-size:14px;font-family:dotum,'돋움',Helvetica;color:#1ec800;line-height:23px;vertical-align:top;">
							            도취마켓
									</td></tr></tbody>
							</table>
						</td><td style="width:21px"></td></tr><tr><td style="width:21px"></td><td>
                <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                    <tbody><tr><td style="height:53px"></td></tr><tr><td style="height:21px;font-size:14px;font-family:dotum,'돋움',Helvetica;font-weight:bold;color:#000;vertical-align:top;letter-spacing:0;">
                            상품 등록 여부 확인
                        </td></tr><tr><td style="height:2px;background:#424240"></td></tr><tr><td style="height:20px"></td></tr><tr><td>
                        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                          <tbody><tr><td style="line-height:24px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;vertical-align:top;">
                                네이버쇼핑 입점이 완료되었어도 스마트스토어에 상품이 등록되어 있지 않거나 네이버쇼핑 노출 여부를 설정하지 않으신 경우 서비스 시작이 불가합니다.
                                스마트스토어에 상품이 정상적으로 등록되어 있는지 확인하여 주시기 바랍니다.
                              </td></tr></tbody>
                        </table>
                      </td></tr></tbody></table>
            </td><td style="width:21px"></td></tr><tr><td style="width:21px"></td><td>
                <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                    <tbody><tr><td style="height:53px"></td></tr><tr><td style="height:21px;font-size:14px;font-family:dotum,'돋움',Helvetica;font-weight:bold;color:#000;vertical-align:top;letter-spacing:0;">
                            충전금 결제 방법 안내
                        </td></tr><tr><td style="height:2px;background:#424240"></td></tr><tr><td style="height:20px"></td></tr><tr><td>
                        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                          <tbody><tr><td style="line-height:24px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;vertical-align:top;">
                                지금부터 쇼핑파트너존을 통해 네이버쇼핑의 다양한 광고를 구매하실 수 있습니다.
                                네이버쇼핑 광고를 구매하시기 위해서는 충전금이 필요하며, 충전금은
                                <a href="http://adcenter.shopping.naver.com/account/charge/main.nhn" target="_blank" style="text-decoration:underline;color:#1ec800;" rel="noreferrer noopener">
                                  [쇼핑파트너존 &gt; 충전/계좌관리 &gt; 충전하기]</a>에서 충전하실 수 있습니다.
                              </td></tr></tbody>
                        </table>
                      </td></tr></tbody></table>
            </td><td style="width:21px"></td></tr><tr><td style="width:21px"></td><td>
                <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                    <tbody><tr><td style="height:53px"></td></tr><tr><td style="height:21px;font-size:14px;font-family:dotum,'돋움',Helvetica;font-weight:bold;color:#000;vertical-align:top;letter-spacing:0;">
                            대행사 광고 관리 권한 부여에 대한 안내
                        </td></tr><tr><td style="height:2px;background:#424240"></td></tr><tr><td style="height:20px"></td></tr><tr><td>
                        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                          <tbody><tr><td style="line-height:24px;font-size:14px;font-family:dotum,'돋움',Helvetica;color:#696969;vertical-align:top;">
                                대행사를 통해 입점한 광고주님 중 광고신청(계약) 및 구매/관리, 소재 등록/관리 등의 ‘광고관리’ 업무를 대행사에 위임하고자 하시는 경우,
                                <a href="https://adcenter.shopping.naver.com/mall/manage/mall_detail.nhn" target="_blank" style="text-decoration:underline;color:#1ec800;" rel="noreferrer noopener">
                                  [쇼핑파트너존 &gt; 정보관리 &gt; 정보수정]</a>페이지 하단에서 ‘광고 대행여부 선택’을 체크하여 주시기 바랍니다.
                              </td></tr></tbody>
                        </table>
                      </td></tr><tr><td style="height:54px"></td></tr></tbody></table>
            </td><td style="width:21px"></td></tr><tr><td align="center" colspan="3">
            <div style="display:inline-block;width:278px;max-width:100%;vertical-align:top">
                <table style="table-layout:fixed;width:100%;" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr><td style="padding-bottom:4px">
                    <table style="table-layout:fixed;width:100%;background-color:#20c603" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr><td style="height:56px;text-align:center;border:1px solid #1cbd00">
                          <a href="https://adcenter.shopping.naver.com" style="display:block;:54px;font-size:19px;color:#fff;text-decoration:none;line-:56px;font-family:'돋움','dotum';letter-spacing:-1px" rel="noreferrer noopener" target="_blank">
                              쇼핑파트너존 바로가기
                          </a>
                      </td></tr></tbody></table>
                </td></tr></tbody></table>
            </div>
        </td></tr><tr><td colspan="3" style="height:36px"></td></tr><!-- footer--><tr><td style="width:21px;background:#f5f5f5"></td><td>
                <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
                <tbody><tr><td style="padding-top:27px;padding-bottom:11px;background:#f5f5f5;font-size:12px;font-family:dotum,'돋움',Helvetica;color:#767676;line-height:17px">
                    본 메일은 발신전용 입니다. 궁금하신 점이나 불편한 사항은 <a href="http://help.naver.com" style="color:#767676;font-weight:bold;text-decoration:none" rel="noreferrer noopener" target="_blank">고객센터</a>를 통해 문의해 주시기 바랍니다.
                    </td></tr><tr><td style="height:1px;background-color:#e5e5e5"></td></tr><tr><td style="padding-top:13px;padding-bottom:13px;background:#f5f5f5;font-size:12px;font-family:dotum,'돋움',Helvetica;color:#767676;line-height:17px">
                        사업자등록번호 : 220-81-62517<span style="padding:0 5px;color:#767676">|</span>통신판매업신고번호 : 경기성남 제 2006-692호 <span style="padding:0 5px;color:#767676">|</span>대표이사 : 한성숙<br>
                        주소 : 경기도 성남시 분당구 불정로 6 네이버 그린팩토리, 463-867 <span style="padding:0 5px;color:#767676">|</span>고객센터 : 1588-3819<span style="padding:0 5px;color:#767676">|</span>팩스 : 033-816-5304
                    </td></tr><tr><td style="padding-bottom:57px;background:#f5f5f5;font-size:12px;font-family:Helvetica;color:#696969;line-height:17px">
                    Copyright ⓒ <strong>NAVER</strong> Corp. All Rights Reserved.
                    </td></tr></tbody></table>
            </td><td style="width:21px;background:#f5f5f5"></td></tr><!--// footer--></tbody></table>';

mailer("test", "evio_dochwimarket@naver.com", "evio_dochwimarket@naver.com", "네이버 스마트스토어 주문", $content, 1);
alert($member['mb_nick'].'('.$member['mb_email'].')님께 테스트 메일을 발송하였습니다. 확인하여 주십시오.');