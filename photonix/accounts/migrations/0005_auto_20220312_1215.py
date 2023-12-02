# Generated by Django 3.2.12 on 2022-03-12 12:15

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('accounts', '0004_alter_user_first_name'),
    ]

    operations = [
        migrations.RenameField(
            model_name="user", old_name="has_config_persional_info", new_name="has_set_personal_info",
        ),
        migrations.AlterField(
            model_name='user',
            name='has_set_personal_info',
            field=models.BooleanField(default=False, help_text='User has set their personal info'),
        ),
        migrations.AlterField(
            model_name='user',
            name='has_configured_image_analysis',
            field=models.BooleanField(default=False, help_text='User has configured image analysis'),
        ),
        migrations.AlterField(
            model_name='user',
            name='has_configured_importing',
            field=models.BooleanField(default=False, help_text='User has configured photo importing'),
        ),
        migrations.AlterField(
            model_name='user',
            name='has_created_library',
            field=models.BooleanField(default=False, help_text='User has created a library'),
        ),
    ]
