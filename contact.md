---
title: Contact
permalink: "/contact/"
layout: page
---

Want more info on the project? Would you like to set up a free #PopUp self-defense workshop for your organization?
Email us at: [info@popgym.org](mailto:info@popgym.org)

class ContactForm < MailForm::Base
  attribute :name,      :validate => true
  attribute :email,     :validate => /\A([\w\.%\+\-]+)@([\w\-]+\.)+([\w]{2,})\z/i
  attribute :file,      :attachment => true

  attribute :message
  attribute :nickname,  :captcha  => true

  # Declare the e-mail headers. It accepts anything the mail method
  # in ActionMailer accepts.
  def headers
    {
      :subject => "My Contact Form",
      :to => "info@popgym.org",
      :from => %("#{name}" <#{email}>)
    }
  end
end

You can also find us on any of the Facebook, Twitter, Instagram, and Meetup! Check the buttons below!

